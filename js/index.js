const listItems = document.querySelectorAll('#clubList li');
let draggedItem = null;

listItems.forEach(item => {
    item.addEventListener('dragstart', function () {
        draggedItem = this;
        setTimeout(() => {
            this.classList.add('dragging');
        }, 0);
    });

    item.addEventListener('dragend', function () {
        setTimeout(() => {
            this.classList.remove('dragging');
            draggedItem = null;
        }, 0);
    });

    item.addEventListener('dragover', function (e) {
        e.preventDefault();
        const dragging = document.querySelector('.dragging');
        if (dragging !== this) {
            const items = Array.from(listItems);
            const currentIndex = items.indexOf(dragging);
            const hoveredIndex = items.indexOf(this);

            if (currentIndex > hoveredIndex) {
                this.parentNode.insertBefore(dragging, this);
            } else {
                this.parentNode.insertBefore(dragging, this.nextSibling);
            }
        }
    });
});


function lastSeasonShow() {
    const elements = document.querySelectorAll('.lastSeason');
    
    elements.forEach(element => {
        if (element.style.display !== 'none') {
            element.style.display = 'none';
        } else {
            element.style.display = 'flex';
        }
    });
}

function regler(){
    if (document.getElementById('regler').style.display !== 'none') {
        document.getElementById('regler').style.display = 'none';
    } else {
        document.getElementById('regler').style.display = 'block';
    }
}

const btn = document.querySelector("#btn");
        const btnText = document.querySelector("#btnText");

        btn.onclick = () => {
            btnText.innerHTML = "Thanks";
            btn.classList.add("active");
        };