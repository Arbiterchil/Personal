var module = angular.module("Amad", []);
module.controller("studentctrl", ["$scope", "$http", (s, h) => {

    s.update = false;
    s.nextdiv = false;
    getStudents();

    s.saveStudent = function (data) {
        data.gender = data.gender == true ? "Male" : "Female";
        h.post("../Student/saveStudent", data).then(function(){
            alert("Save Successfully!");
            getStudents();
            s.clear();
        })
    }
    s.updateStudent = (data) => {
        data.gender = data.gender == true ? "Male" : "Female";
        h.post("../Student/updateStudent", data).then((r) => {
            alert("Update Successfully!");
            s.clear();
        })
    }
    s.editStudent = (data) => {
        document.getElementById("gmale").checked = false;
        document.getElementById("gfemale").checked = false;
        s.data = data;
        s.update = true;
        data.gender == "Male" ? document.getElementById("gmale").checked = true : document.getElementById("gfemale").checked = true;
        location.href = "#sheader";
    }
    s.next = () => {
        s.nextdiv = true;
    }
    s.prev = () => {
        s.nextdiv = false;
    }
    s.clear = () => {
        s.data = {};
        s.update = false;
        s.nextdiv = false;
        document.getElementById("gmale").checked = false;
        document.getElementById("gfemale").checked = false;
    }

    function getStudents() {
        h.post("../Student/getStudents").then(function(r) {
            s.students = r.data;
        })
    }
}]);