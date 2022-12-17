<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    Map Box
                </div>
                <div class="card-body">
                    <div id='map' style='width: 100%; height: 75vh;' wire:ignore></div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    Form
                </div>
                <div class="card-body">
                    <form 
                        @if ($isEdit)
                            wire:submit.prevent="updateLocation"
                        @else
                            wire:submit.prevent="saveLocation"
                        @endif
                    >
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group my-1">
                                    <label>Longtitude</label>
                                    <input type="text" class="form-control" wire:model='long'>
                                    @error('long') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group my-1">
                                    <label>Latitude</label>
                                    <input type="text" class="form-control" wire:model='lat'>
                                    @error('lat') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group my-1">
                                <label>Title</label>
                                <input type="text" class="form-control" wire:model='title'>
                                @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="form-group my-1">
                                <label>Description</label>
                                <textarea class="form-control" wire:model='description'></textarea>
                                @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="form-group my-1">
                                <label>Picture</label>
                                <input type="file" class="form-control" wire:model='image'>
                                @error('image') <small class="text-danger">{{ $message }}</small> @enderror
                                @if ($image)
                                    <img src="{{ $image->temporaryUrl() }}" class="img-fluid">
                                @endif
                                @if ($imageUrl && ! $image)
                                    <img src="{{ asset('/storage/images/'.$imageUrl) }}" class="img-fluid">
                                @endif
                            </div>
                            <div class="form-group my-1">
                                <button type="submit" class="btn btn-dark text-white btn-block w-100">{{ $isEdit ? "Update Location" : "Submit Location" }}</button>
                                @if ($isEdit)
                                    <button type="submit" class="btn btn-danger text-white btn-block w-100 mt-1" wire:click="deleteLocation">Delete Location</button>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('livewire:load', () => {
            const defaultLocation = [106.70089297556797, -6.360616851094591]
    
            mapboxgl.accessToken = '{{ env("MAPBOX_KEY") }}';
            var map = new mapboxgl.Map({
                container: 'map',
                center: defaultLocation,
                zoom: 10.15,
                // style: 'mapbox://styles/mapbox/streets-v11'
            });

            // const geoJson = {
            //     "type": "FeatureCollection",
            //     "features": [
            //         {
            //             "type": "Feature",
            //             "geometry": {
            //                 "coordinates": [
            //                     "106.73830754205",
            //                     "-6.2922403995615"
            //                 ],
            //                 "type": "Point"
            //             },
            //             "properties": {
            //                 "message": "Mantap",
            //                 "iconSize": [
            //                     50,
            //                     50
            //                 ],
            //                 "locationId": 30,
            //                 "title": "Hello new",
            //                 "image": "https://upload.wikimedia.org/wikipedia/id/thumb/e/e0/EVOS_Esports_Logo_%28SVG%29_-_Vector69Com.svg/1200px-EVOS_Esports_Logo_%28SVG%29_-_Vector69Com.svg.png",
            //                 "description": "Mantap"
            //             }
            //         },
            //         {
            //             "type": "Feature",
            //             "geometry": {
            //                 "coordinates": [
            //                     "106.68681595869",
            //                     "-6.3292244652013"
            //                 ],
            //                 "type": "Point"
            //             },
            //             "properties": {
            //                 "message": "oke mantap Edit",
            //                 "iconSize": [
            //                     50,
            //                     50
            //                 ],
            //                 "locationId": 29,
            //                 "title": "Rumah saya Edit",
            //                 "image": "https://1.bp.blogspot.com/--bouxTF55Go/YFokr7Y9a8I/AAAAAAAACJE/TfWqt09_HnMEYBz0hs918fiVdGitu2Y_gCNcBGAsYHQ/s2048/Onic%2BEsports.png",
            //                 "description": "oke mantap Edit"
            //             }
            //         },
            //         {
            //             "type": "Feature",
            //             "geometry": {
            //                 "coordinates": [
            //                     "106.62490035406",
            //                     "-6.3266855038639"
            //                 ],
            //                 "type": "Point"
            //             },
            //             "properties": {
            //                 "message": "Update Baru",
            //                 "iconSize": [
            //                     50,
            //                     50
            //                 ],
            //                 "locationId": 22,
            //                 "title": "Update Baru Gambar",
            //                 "image": "https://i.ibb.co/Dptbhxm/20211019-175916.png?fbclid=IwAR0SHT5M9lhLGc9L3Z-Y1JtR23DQWHYIf0K-YixFuBDxDtqzF8MaGWcVS5Y",
            //                 "description": "Update Baru"
            //             }
            //         },
            //         {
            //             "type": "Feature",
            //             "geometry": {
            //                 "coordinates": [
            //                     "106.72391468711",
            //                     "-6.3934163494543"
            //                 ],
            //                 "type": "Point"
            //             },
            //             "properties": {
            //                 "message": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            //                 "iconSize": [
            //                     50,
            //                     50
            //                 ],
            //                 "locationId": 19,
            //                 "title": "awdwad",
            //                 "image": "https://1.bp.blogspot.com/-u4xhVFYGvzM/YFt5Q5FQgwI/AAAAAAAACJk/ldB5kU9Uc3Yz-4qbHEx0CRsmRbkcPSY8gCNcBGAsYHQ/s320/Geek%2BFam%2BEsports.png",
            //                 "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
            //             }
            //         },
            //         {
            //             "type": "Feature",
            //             "geometry": {
            //                 "coordinates": [
            //                     "106.67224158205",
            //                     "-6.3884963990263"
            //                 ],
            //                 "type": "Point"
            //             },
            //             "properties": {
            //                 "message": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            //                 "iconSize": [
            //                     50,
            //                     50
            //                 ],
            //                 "locationId": 18,
            //                 "title": "adwawd",
            //                 "image": "https://liquipedia.net/commons/images/3/3b/GPX_Esports.png",
            //                 "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
            //             }
            //         },
            //         {
            //             "type": "Feature",
            //             "geometry": {
            //                 "coordinates": [
            //                     "106.74495523289",
            //                     "-6.3642034511073"
            //                 ],
            //                 "type": "Point"
            //             },
            //             "properties": {
            //                 "message": "awdwad",
            //                 "iconSize": [
            //                     50,
            //                     50
            //                 ],
            //                 "locationId": 12,
            //                 "title": "adawd",
            //                 "image": "https://upload.wikimedia.org/wikipedia/commons/5/5b/LOGO_RRQ_orange.png",
            //                 "description": "awdwad"
            //             }
            //         }
            //     ]
            // }
            
            const loadLocation = (geoJson) => {
                geoJson.features.forEach((location) => {
                    const {geometry, properties} = location
                    const {iconSize,locationId,title,image,description} = properties

                    let markerElement = document.createElement('div')
                    markerElement.className = 'marker' + locationId
                    markerElement.id = locationId
                    markerElement.style.backgroundImage = 'url(https://www.freeiconspng.com/thumbs/location-icon-png/map-location-icon-29.png)'
                    markerElement.style.backgroundSize = 'cover'
                    markerElement.style.width = '50px'
                    markerElement.style.height = '50px'

                    const imageStorage = '{{ asset("/storage/images") }}' + '/' + image

                    const content = `
                        <div style="overflow-y:auto; max-height:400px, width:100%;">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Title</td>
                                        <td>${title}</td>
                                    </tr>
                                    <tr>
                                        <td>Picture</td>
                                        <td>
                                            <img src="${imageStorage}" loading="lazy" class="container-fluid">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Description</td>
                                        <td>${description}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    `

                    markerElement.addEventListener('click',(e) => {
                        const locationId = e.target.id
                        @this.findLocationById(locationId)
                    })

                    const popUp = new mapboxgl.Popup({
                        offset:25
                    }).setHTML(content).setMaxWidth("400px")
                    
                    new mapboxgl.Marker(markerElement)
                    .setLngLat(geometry.coordinates)
                    .setPopup(popUp)
                    .addTo(map)
                })
            }

            loadLocation({!! $geoJson !!})

            window.addEventListener('locationAdded', (e) => {
                loadLocation(JSON.parse(e.detail))
            })

            window.addEventListener('updateLocation', (e) => {
                loadLocation(JSON.parse(e.detail))
                $('.mapboxgl-popup').remove()
            })

            window.addEventListener('deleteLocation', (e) => {
                $('.marker' + e.detail).remove()
                $('.mapboxgl-popup').remove()
            })
            
            const style = "dark-v10"
            // light-v10, outdoors-v-11, satellite-v9, streets-v11, dark-v10
            map.setStyle(`mapbox://styles/mapbox/${style}`)

            map.addControl(new mapboxgl.NavigationControl())

            map.on('click',(e) => {
                const longtitude = e.lngLat.lng
                const lattitude  = e.lngLat.lat

                @this.long = longtitude
                @this.lat  = lattitude
            })
        })
    </script>
@endpush
