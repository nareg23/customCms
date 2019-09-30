function handleDelete(id) {
    let form = document.getElementById('deleteCategoryFrom');
    $("#deleteModel").modal('show');
    form.action = "/category/" + id;
}
