const select = (el, all = !1) => {
    el = el.trim()
    if (all) {
        return [...document.querySelectorAll(el)]
    } else {
        return document.querySelector(el)
    }
}
const on = (type, el, listener, all = !1) => {
    let selectEl = select(el, all)
    if (selectEl) {
        if (all) {
            selectEl.forEach(e => e.addEventListener(type, listener))
        } else {
            selectEl.addEventListener(type, listener)
        }
    }
}

let accordion = select(".menu-sub-accordion .menu-item .menu-link.active", true)
accordion.forEach((item, index) => {
    console.log("item", item.closest('div.menu-accordion').classList);
    let parent = item.closest('div.menu-accordion').classList.add('here', 'show')
})