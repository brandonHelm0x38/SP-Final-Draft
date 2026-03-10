

// JavaScript to drive advanced dropDown menu functionality... Only allows one pop-up to be open at a time... expand to include your function for forum pop-ups.
document.addEventListener('click', e => {
    const isDropdownButton = e.target.matches("[data-dropdown-button]")
    if (!isDropdownButton && e.target.closest('[data-dropdown]') != null) return

    // This bit of code sets the currently selected dropdown...
    let currentDropdown
    if (isDropdownButton) {
        currentDropdown = e.target.closest('[data-dropdown]')
        currentDropdown.classList.toggle('active')
    }

    // This bit of code closes all the dropdowns that are open... except for the most recently selected dropdown...
    document.querySelectorAll("[data-dropdown].active").forEach(dropdown => {
        if (dropdown === currentDropdown) return
        dropdown.classList.remove('active')
    })
})


// JavaScript for opening (and building) Web Call... could be API hosted as extension of their platform if they (Quora/Reddit) choose to host the data...
function openBranchFunction(siteURL) {
    var myWindow = window.open(siteURL, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=1900,height=1000");
}


// JavaScript jump-to quickly +Comment within Branch...
function quickCommentFunction() {
    var myWindow2 = window.open("https://www.Quora.com", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");
}