<script type='application/ld+json'>
{
	"@context": "http://schema.org/",
	"@type": "HotelRoom",
	"bed": {
		"@type": "BedDetails",
		"numberOfBeds": "{{ $occupancy['beds'] }}",
		"typeOfBed": "{{ $occupancy['bed_type'] }}"
	},
	"occupancy": {
		"@type": "QuantitativeValue",
		"maxValue": "{{ $occupancy['max'] }}",
		"minValue": "{{ $occupancy['min'] }}"
	},
	"permittedUsage": "No smoking",
	"petsAllowed": "false",
	"map": "https://goo.gl/maps/fQZhBMyJJrn",
	"smokingAllowed": "false",
	"telephone": "+886-3-959-5685",
	"description": "King size bed hotel room",
	"name": "Rose Room",
	"image": "{{ url($image) }}"
}
</script>