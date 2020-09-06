let base_url = "details.php";
$("document").ready(function () {
  getRestaurantMenuList();
  document
    .querySelector("#restaurant")
    .addEventListener("change", getMenuItemList);
});
function getRestaurantMenuList() {
  let url = base_url + "?req=menu_name_list";
  $.get(url, function (data, success) {
    for (const key in data) {
      let opt = document.createElement("option");
      opt.textContent = data[key].name;
      opt.value = data[key].name;
      document.querySelector("#restaurant").appendChild(opt);
    }
  });
}

function getMenuItemList(i) {
  let index = i.target.value;

  console.log(index);
  let url = base_url + "?req=menuName&name=" + index;
  $.get(url, function (data, success) {
    if (data != null) {
      let x = data;
      let pricesmall = x.price_small;

      if (pricesmall == null) {
        pricesmall = "Not available";
      }
      let descrp = x.description;
      if (descrp == "") {
        descrp = "Description not available";
      }
      let smallpname = x.small_portion_name;
      if (smallpname == null) {
        smallpname = "Not Available";
      }
      let largepname = x.large_portion_name;
      if (largepname == null) {
        largepname = "Not Available";
      }
      document.querySelector("#menuname").textContent = x.name;
      document.querySelector("#id").textContent = x.id;
      document.querySelector("#sname").textContent = x.short_name;
      document.querySelector("#descp").textContent = descrp;
      document.querySelector("#psmall").textContent = pricesmall;
      document.querySelector("#plarge").textContent = x.price_large;
      document.querySelector("#spname").textContent = smallpname;
      document.querySelector("#lpname").textContent = largepname;
    }
    document.getElementById("table").style.display = "block";
  });
}
