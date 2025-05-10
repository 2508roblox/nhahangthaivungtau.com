<div>
    <div id="viewer" style="     height: 700px; ">
        <div class="bar-container">

            <div class="bar">
                <div class="edges">
                    <div class="bg"></div>
                </div>
                <div class="items">
                    <div class="item"><i class="icon zoom-in"></i></div>
                    <div class="item"><i class="icon zoom-out"></i></div>
                    <div class="item"><i class="icon prev-page"></i></div>
                    <div class="item"><i class="icon next-page"></i></div>
                    <div class="item"><i class="icon share"></i></div>
                    <div class="item"><i class="icon clip"></i></div>
                </div>
            </div>
        </div>

        <div class="magazine-viewport" style="width:100%; height:100%;">
            <div class="magazine turn-magazine" id="magazine">
                {{-- @foreach ($menuImages as $image)
                <div class="page">
                    <img src="{{ asset('storage/' . $image) }}" style="width:100%; height:auto;" />
                </div>
            @endforeach --}}
                <div ignore="1" class="control control-previous-page">
                    <div><i></i></div>
                </div>
                <div ignore="1" class="control control-next-page">
                    <div><i></i></div>
                </div>
            </div>
        </div>

        <!-- Thumbnails -->
        <div class="bottom">
            <div class="edges">
                <div class="thumbnails">
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="/assets/scripts/all.min.js"></script>


<script type="text/javascript">

    // flipify({
    //     id: 1,
    //     name: 'Las Vegas',
    //     display: 'double',
    //     pages: {{ count($menuImages) > 0 ? count($menuImages) : 12 }},
    //     pageWidth: 922 * 4,
    //     pageHeight: 600 * 4,
    // });

                            flipify({
                                id: 1,
                                name: 'Las Vegas',
                                display: 'double',
                                pages: 4,
                                pageWidth: 922 * 4,
                                pageHeight: 600 * 4,
                                images: [
                                    @foreach ($menuImages as $image)
                                    "{{ url('storage/' . $image) }}",
                                    @endforeach
                                ],
                                path: 'storage/menu/'
                            });
</script>
<style>
    div#magazine {
/* overflow-y: hidden; */
}
</style>

</div>