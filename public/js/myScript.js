function changeActive(id)
{
    x = document.getElementById(id);
    console.log(id);
    console.log(x.innerHTML);
    console.log(x.classList.remove("active"));
    console.log(x.classList.contains("active"));
    x.classList.add("active");
}

function validateNumber()
{

}