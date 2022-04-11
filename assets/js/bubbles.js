// Voici un peu de JS
// Cela peut sembler basique mais ... "it gets the job done" comme disent les anglosaxons
const bubbles = document.getElementById('bubbles').children;
const colors = [
    "#4285F4",
    "#DB4437",
    "#F4B400",
    "#0F9D59",
    "#dddfd4",
    "#fae596",
    "#3fb0ac",
    "#173e43",
    "#c2dde6",
    "#e05915"
];

setFirstBubbleColor();

setInterval(changeBubbleColor, 4000);

function setFirstBubbleColor() {
    let bubble_indexes = [1, 2, 4, 7, 8];
    let color_indexes = setRandom_colorIndexes();
    for (let i = 0; i < 5; i++) {
        let bubble_index = bubble_indexes[i];
        let color_index = color_indexes[i];
        addInlineFormatting(bubble_index, color_index);
    }

}

function changeBubbleColor() {
    let bubble_indexes = [1, 2, 4, 7, 8];
    let color_indexes = setRandom_colorIndexes();

    for (let i = 0; i < 5; i++) {
        let bubble_index = bubble_indexes[i];
        let color_index = color_indexes[i];
        addInlineFormatting(bubble_index, color_index);
    }
}

function addInlineFormatting(bubble_index, color_index) {
    bubbles[bubble_index].setAttribute('style', 'border-color: ' + colors[color_index] + '; ' + 'background: ' + colors[color_index] + ';');
}

function setRandom_colorIndexes() {
    let random_indexes = [];
    let color_index = Math.floor(Math.random() * colors.length);
    switch (color_index) {
        case 0:
            random_indexes = [1, 4, 6, 9, 0];
            break;
        case 1:
            random_indexes = [2, 5, 7, 3, 1];
            break;
        case 2:
            random_indexes = [3, 8, 6, 5, 2];
            break;
        case 3:
            random_indexes = [4, 2, 7, 5, 3];
            break;
        case 4:
            random_indexes = [5, 9, 8, 1, 4];
            break;
        case 5:
            random_indexes = [6, 2, 3, 9, 5];
            break;
        case 6:
            random_indexes = [7, 5, 1, 2, 6];
            break;
        case 7:
            random_indexes = [8, 3, 4, 6, 7];
            break;
        case 8:
            random_indexes = [9, 7, 5, 4, 8];
            break;
        case 9:
            random_indexes = [0, 2, 6, 3, 9];
            break;
    }
    return random_indexes;
} 