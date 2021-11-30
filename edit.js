function editNote(id, name, des) {
    var modal = document.getElementById("myModalEdit");
    var btn = document.getElementById("edit"+id);
    var span = document.getElementsByClassName("close")[0];
    btn.onclick = function() {
        modal.style.display = "block";
        document.getElementById("headline").value = name;
        document.getElementById("description").value = des;
        document.getElementById("noteId").value = id;
    }
    span.onclick = function() {
        modal.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
        modal.style.display = "none";
        }
    }
};
function deleteNote(id) {
    var modalDel = document.getElementById("delPop");
    var btnDel = document.getElementById("del"+id);
    var spanDel = document.getElementsByClassName("closeDel")[0];
    btnDel.onclick = function() {
        modalDel.style.display = "block";
        document.getElementById("noteIdDel").value = id;
    }
    spanDel.onclick = function() {
        modalDel.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modalDel) {
        modalDel.style.display = "none";
        }
    }
};
function addNote() {
    var addmodal = document.getElementById("addPop");
    var addbtn = document.getElementById("addBtn");
    var addspan = document.getElementsByClassName("closeAdd")[0];
    addbtn.onclick = function() {
        addmodal.style.display = "block";
    }
    addspan.onclick = function() {
        addmodal.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == addmodal) {
        addmodal.style.display = "none";
        }
    }
};