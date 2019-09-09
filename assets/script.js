
// function displayForm(type) {
//     const types = ["addItem", "resources", "resource-form", "signUp", "logIn", "myItems"];
//     types.forEach(item => {
//         try {
//             document.getElementById(item).style.display = "none";
//         } catch (e) {
//             return;
//         }
//     })
//     if(type == 'addItem') {
//         document.getElementById("resource-form").style.display = "flex";
//     } else if (type == 'signUp') {
//         document.getElementById("signUp").style.display = "flex";
//     } else if (type == 'logIn') {
//         document.getElementsByClassName("logIn")[0].style.display = "flex";
//     } else if (type =='myItems') {
//         document.getElementById("myItems").style.display = "flex";
//     } else {
//         document.getElementById("resources").style.display = "inline";
//     }
// }