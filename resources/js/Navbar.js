export class Navbar {
    constructor() {
        this.els = {
            body: document.body,
            main: document.querySelector('.main-nav'),
            main_trigger: document.querySelector('#nav-trigger'),
            mobile_building_triggers: [...document.querySelectorAll('.subnav-trigger')],
            mobile_building_close: [...document.querySelectorAll('.subnav-close')],
            mobile_buildings_all: [...document.querySelectorAll('.nav-sub-list')],
            rooms_panel_triggers: [...document.querySelectorAll('.rooms-panel-trigger')],
            rooms_panel: document.querySelector('.rooms-nav-panel'),
            mobile_buildings: {
                aqua: document.querySelector(`.nav-sub-list.aqua`),
                tree: document.querySelector(`.nav-sub-list.tree`),
                flower: document.querySelector(`.nav-sub-list.flower`),
            }

        }
    }

    init() {
        this.els.main_trigger.addEventListener('click', () => this.toggleMobileNave());

        this.els.mobile_building_triggers.forEach(trigger => {
            trigger.addEventListener('click', () => this.showMobileBuildingPanel(trigger.getAttribute('data-opens-subnav')));
        });

        this.els.mobile_building_close.forEach(btn => {
            btn.addEventListener('click',  () => this.hideMobileBuildings());
        });

        this.els.rooms_panel_triggers.forEach(trigger => {
            trigger.addEventListener('click', (ev) => {
                ev.stopPropagation();
                this.toggleMainRoomsPanel();
            });
        });

        window.addEventListener('click', (ev) => {
            if(this.roomsPanelIsClosed()) {
                return;
            }
            if(!this.els.rooms_panel.contains(ev.target)) {
                this.hideMainRoomsPanel();
            }
        });

        window.addEventListener('keydown', (ev) => {
            if(ev.key === 'Escape') {
                if(!this.roomsPanelIsClosed()) {
                    this.hideMainRoomsPanel();
                }

            }

        });


    }

    roomsPanelIsClosed() {
        return this.els.rooms_panel.classList.contains('opacity-0');
    }

    showMainRoomsPanel() {
        this.els.rooms_panel.classList.remove('opacity-0');
    }

    hideMainRoomsPanel() {
        this.els.rooms_panel.classList.add('opacity-0');
    }

    toggleMainRoomsPanel() {
        this.els.rooms_panel.classList.toggle('opacity-0');
    }

    toggleMobileNave() {
        this.els.body.classList.toggle('nav-open');
        this.els.main.classList.toggle('expose');
    }

    showMobileBuildingPanel(building) {
        this.els.mobile_buildings[building].classList.add('expose');
    }

    hideMobileBuildings() {
        this.els.mobile_buildings_all.forEach(el => el.classList.remove('expose'));
    }
}
