function drop_down() {
    let element = document.getElementById('drop_down');
    element.classList.toggle('drop');
}

(function () {
    let possition = 0;
    const headlines = headline_displayer();

    function headline_displayer() {
        let elements = document.getElementsByTagName('h1');
        let head_list = [];

        for (let i = 0; i < elements.length; i++) {
            head_list.push(elements.item(i).innerText
            )
        }

        return head_list;
    }

    (function reformat() {
        let parent_element = document.getElementById('news_list');
        parent_element.innerHTML = `<li id="news_item"><h1>${headlines[possition]}</h1></li>`;
        possition += 1;
    })()

    function loop() {
        if (possition == 5) {
            possition = 0;
        }

        parent_ele = document.getElementById('news_item');
        parent_ele.innerHTML = `<h1>${headlines[possition]}</h1>`;
        possition += 1;
    }

    setInterval(loop, 9000);

})()
