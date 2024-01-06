// function selectLocalImage() {
//     const input = document.createElement("input");
//     input.setAttribute("type", "file");
//     input.click();

//     // Listen upload local image and save to server
//     input.onchange = () => {
//         const file = input.files[0];

//         // file type is only image.
//         if (/^image\//.test(file.type)) {
//             imageHandler(file);
//         } else {
//             console.warn("You could only upload images.");
//         }
//     };
// }

// function imageHandler(image) {
//     console.log(image);
// }

// function insertToEditor(url, editor) {
//     // push image url to rich editor.
//     const range = editor.getSelection();
//     editor.insertEmbed(range.index, "image", url);
// }

var quill = new Quill("#editor", {
    modules: {
        toolbar: [
            [{ header: [1, 2, 3, 4, 5, 6, false] }],
            [{ font: [] }],
            ["bold", "italic"],
            ["link", "blockquote", "code-block", { align: [] }],
            [{ list: "ordered" }, { list: "bullet" }],
            [{ script: "sub" }, { script: "super" }],
            [{ color: [] }, { background: [] }],
        ],
    },
    theme: "snow",
});

// quill.getModule("toolbar").addHandler("image", () => {
//     selectLocalImage();
// });

quill.on("text-change", function (delta, oldDelta, source) {
    document.querySelector("input[name='description']").value =
        quill.root.innerHTML;
});
