document.getElementById('filter_manufacturer_id').addEventListener('change', function () {
    window.location.href = window.location.href.split('?')[0] + '?manufacturer_id=' + this.value
})