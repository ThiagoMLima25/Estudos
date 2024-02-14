$(document).ready(function() {
    $.get("", {
            part: '',
            id: '',
            key: 'AIzaSyB49WfTkgfK2menTbmVCkLG0f9cYWQ9XKU'},
            function(data) {
                console.log(data);
            }
    )
});