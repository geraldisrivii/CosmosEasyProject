let FAQitems = document.querySelectorAll('.FAQ-item');
for (const FAQitem of FAQitems) {
    let FAQitemVisible = FAQitem.querySelector('.FAQ-item-visible');
    console.log(FAQitemVisible);
    if(FAQitemVisible){
        FAQitemVisible.addEventListener('click', () => {
            FAQitem.querySelector('.FAQ-item-invisible').classList.toggle('FAQ-item-invisible_visible');
        })
    }
}
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiIiwic291cmNlcyI6WyJqcy9GQVFpdGVtLmpzIl0sInNvdXJjZXNDb250ZW50IjpbImxldCBGQVFpdGVtcyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy5GQVEtaXRlbScpO1xuZm9yIChjb25zdCBGQVFpdGVtIG9mIEZBUWl0ZW1zKSB7XG4gICAgbGV0IEZBUWl0ZW1WaXNpYmxlID0gRkFRaXRlbS5xdWVyeVNlbGVjdG9yKCcuRkFRLWl0ZW0tdmlzaWJsZScpO1xuICAgIGNvbnNvbGUubG9nKEZBUWl0ZW1WaXNpYmxlKTtcbiAgICBpZihGQVFpdGVtVmlzaWJsZSl7XG4gICAgICAgIEZBUWl0ZW1WaXNpYmxlLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgKCkgPT4ge1xuICAgICAgICAgICAgRkFRaXRlbS5xdWVyeVNlbGVjdG9yKCcuRkFRLWl0ZW0taW52aXNpYmxlJykuY2xhc3NMaXN0LnRvZ2dsZSgnRkFRLWl0ZW0taW52aXNpYmxlX3Zpc2libGUnKTtcbiAgICAgICAgfSlcbiAgICB9XG59Il0sImZpbGUiOiJqcy9GQVFpdGVtLmpzIn0=
