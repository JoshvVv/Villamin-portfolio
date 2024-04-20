<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.8.335/pdf.min.js"></script>
<div id="pdfViewer"></div>
<script>
    // Path to your PDF file
    var pdfPath = "{{ asset('cv/cv.pdf') }}";

    // Initialize PDF.js
    pdfjsLib.getDocument(pdfPath).promise.then(function(pdf) {
        pdf.getPage(1).then(function(page) {
            var scale = 1.5;
            var viewport = page.getViewport({ scale: scale });

            // Prepare canvas using PDF page dimensions
            var canvas = document.createElement("canvas");
            var context = canvas.getContext("2d");
            canvas.height = viewport.height;
            canvas.width = viewport.width;

            // Render PDF page into canvas context
            var renderContext = {
                canvasContext: context,
                viewport: viewport
            };
            page.render(renderContext);

            // Append canvas to PDF container
            document.getElementById("pdfViewer").appendChild(canvas);
        });
    });
</script>
