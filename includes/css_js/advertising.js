const FORM = document.querySelector(".form-send")
const SUBMIT = document.querySelector(".submit-btn")
const CITY_F = document.querySelector(".city_f")
const STATE_NAME = document.querySelector(".state_f")
const ADDRESS = document.querySelector(".address_h")
const HOUSE_TYPE = document.querySelector(".house_type")
const HOUSE_GROUP = document.querySelector(".houses_group")
const METRAGE = document.querySelector(".meterage_f")
const CREATE_YEAR = document.querySelector(".create_year")
const STORE_MET = document.querySelector(".met_store")
const RAHN_MET = document.querySelector(".store_s")
const STORE_AG = document.querySelector(".store_ag")
const ALL_STORE = document.querySelector(".all_store")
const DESCRYPTION = document.querySelector(".description")
const RHEN_PRICE = document.querySelector(".rhen_price")
const MOUNT_PRICE = document.querySelector(".mount_price")

alert('true tue')

let border_err = "2.5px solid red"
let border_def = "1px solid #ced4da"

HOUSE_GROUP.addEventListener("change",(house_group)=>{
    if (HOUSE_GROUP.value == "خریدوفروش خانه و آپارتمان") {
        RHEN_PRICE.style.display = "none"
        MOUNT_PRICE.style.display = "none"
    }else if (HOUSE_GROUP.value == "خرید و فروش ویلا و باغ") {
        RHEN_PRICE.style.display = "none"
        MOUNT_PRICE.style.display = "none"
    }else if (HOUSE_GROUP.value == "خریدوفروش مغازه") {
        RHEN_PRICE.style.display = "none"
        MOUNT_PRICE.style.display = "none"
    }else {
        RHEN_PRICE.style.display = "inline"
        MOUNT_PRICE.style.display = "inline"
    }
},false)

SUBMIT.addEventListener("click",(form_submited)=>{
    var err = true
    
    if (CITY_F.value == "" || CITY_F.value == "نام شهر") {
        CITY_F.style.border = border_err
        err = false
    }else {
        CITY_F.style.border = border_def
    }
    
    if (STATE_NAME.value == "" || STATE_NAME.value == "نام استان") {
        STATE_NAME.style.border = border_err
        err = false
    }else {
        STATE_NAME.style.border = border_def
    }
    
    if (ADDRESS.value == "") {
        ADDRESS.style.border = border_err
        err = false
    }else {
        ADDRESS.style.border = border_def
    }
    
    if (HOUSE_TYPE.value == "" || HOUSE_TYPE.value == "نوع ملک") {
        HOUSE_TYPE.style.border = border_err
        err = false
    }else {
        HOUSE_TYPE.style.border = border_def
    }

    if (METRAGE.value == "") {
        METRAGE.style.border = border_err
        err = false
    }else {
        METRAGE.style.border = border_def
    }
    
    if (CREATE_YEAR.value = "") {
        CREATE_YEAR.style.border = border_err
        err = false
    }else {
        CREATE_YEAR.style.border = border_def
    }

    
    if (STORE_MET.value == "") {
        STORE_MET.style.border = border_err
        err = false
    }else {
        STORE_MET.style.border = border_def
    }

    if (RAHN_MET.value == "") {
        RAHN_MET.style.border = border_err
        err = false
    }else {
        RAHN_MET.style.border = border_def
    }

    if (STORE_AG.value == "") {
        STORE_AG.style.border = border_err
        err = false
    }else {
        STORE_AG.style.border = border_def
    }

    if (ALL_STORE.value == "") {
        ALL_STORE.style.border = border_err
        err = false
    }else {
        ALL_STORE.style.border = border_def
    }

    if (DESCRYPTION.value == "") {
        DESCRYPTION.style.border = border_err
        err = false
    }else {
        DESCRYPTION.style.border = border_def
    }

    
     
    if (err == false) {
        off_submit(event)
    }else {
        alert("go out")
    }

},false)


function off_submit(event) {
    event.preventDefault()
}


