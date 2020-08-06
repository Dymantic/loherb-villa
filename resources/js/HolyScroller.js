export default class HolyScroller
{
    constructor(article_id, previous, page_info) {
        this.previous = previous;
        this.page_info = page_info;
        this.article_id = article_id;
        this.next_id = null;
        this.next_html = null;
        this.next_url = null;
        this.next_title = null;
        this.been_seen = false;
        this.current = document.querySelector(`.article-${article_id}-shell`);
        this.startScrollObserver = makeStartScrollObserver(e => {
            if(!e[0].isIntersecting && this.been_seen) {
                this.updateToCurrentPage();
                this.fetchNextArticle()
                    .then(() => this.insertNextArticle())
                this.startScrollObserver.unobserve(this.current.querySelector('.article-title'));
            } else {
                this.been_seen = true;
            }
        });
        this.startScrollObserver.observe(this.current.querySelector('.article-title'));

    }

    fetchNextArticle() {

        return new Promise((resolve, reject) => {
           axios.get(`/api/posts/${this.article_id}/next`)
               .then(({data}) => {
                   this.next_id = data.next_id;
                   this.next_html = data.html;
                   this.next_title = data.next_title;
                   this.next_url = data.next_url;
                   resolve();
               })
               .catch(reject)
        });

    }

    removePreviousArticle() {
        if(this.previous && this.been_seen) {
            const current_top = document.scrollingElement.scrollTop;
            const old_height = this.previous.offsetHeight;
            document.querySelector('.main-shell').removeChild(this.previous);
            document.scrollingElement.scrollTop = current_top - old_height;
        }
    }

    insertNextArticle() {
        const shell = document.querySelector('.main-shell');
        const new_box = document.createElement('div');
        new_box.classList.add(`article-${this.next_id}-shell`);
        new_box.innerHTML = this.next_html;
        shell.appendChild(new_box);
        new window.HolyScroller(this.next_id, this.current, {
            url: this.next_url,
            title: this.next_title,
        });
    }

    updateToCurrentPage() {

        this.removePreviousArticle();

        if(this.page_info) {
            document.title = this.page_info.title;
            history.pushState({
                'page_url': window.location.href,
            }, this.page_info.title, this.page_info.url);
        } else {
            history.pushState({
                'page_url': window.location.href,
            }, document.title, window.location.href);
        }

    }


}

function makeStartScrollObserver(callback) {
    return new IntersectionObserver(callback, {
        threshold: [1.0]
    })
}

function makeBottomScrollObserver(callback) {
    return new IntersectionObserver(callback, {
        threshold: [0.01]
    })
}

function makeEndingObserver(callback) {
    return new IntersectionObserver(callback, {
        threshold: [0]
    })
}
