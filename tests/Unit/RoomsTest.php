<?php


namespace Tests\Unit;


use App\Accommodation\Building;
use App\Accommodation\RoomType;
use App\Accommodation\Room;
use App\Accommodation\Rooms;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RoomsTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function reads_in_the_rooms()
    {
        //13 rooms exist in the storage/rooms directory
        $this->assertCount(13, Rooms::all());
    }

    /**
     * @test
     */
    public function can_get_room_with_slug()
    {
        $room = Rooms::find('rose');

        $this->assertInstanceOf(Room::class, $room);
        $this->assertSame('rose', $room->slug());
    }

    /**
     * @test
     */
    public function can_get_rooms_for_building()
    {
        //6 rooms exist in flower building
        $in_building = Rooms::inBuilding('flower');

        $this->assertCount(6, $in_building);

        $in_building->each(
            fn($room) => $this->assertSame(Building::FLOWER, $room->building())
        );
    }

    /**
     *@test
     */
    public function can_get_rooms_of_type()
    {
        //only 1 island villa
        $island_quads = Rooms::ofType(RoomType::of('island-quad'));

        $this->assertCount(1, $island_quads);
        $this->assertSame('villa', $island_quads->first()->slug());
    }
}
