let ft_list;

window.onload = function ()
{
  ft_list = document.getElementById("ft_list");
  const newBtn = document.getElementById("button_new");
  newBtn.addEventListener("click", () =>
  {
    const tmp = prompt("Add to list");
    if (tmp) addEntry(tmp);
  });
  const todoItems = localStorage.getItem('todo');
  if (todoItems)
  {
    try
    {
      const parsedItems = JSON.parse(todoItems);
      parsedItems.forEach(addEntry);
    }
    catch (e)
    {
      console.log('error');
      console.log(todoItems);
      console.log(e);
    }
  }
}

window.onunload = function ()
{
  console.log("unload");
  const todoItems = [...ft_list.children]
    .filter(div => div.tagName === "DIV")
    .map(div => div.innerHTML)
    .reverse();
  localStorage.setItem('todo', JSON.stringify(todoItems));
}

addEntry = function (tmp)
{
  var div = document.createElement("div");
  div.className = "entry";
  div.innerHTML = tmp;
  div.addEventListener("click", deleteEntry);
  ft_list.insertBefore(div, ft_list.firstChild);
}

deleteEntry = function (event)
{
  const {target} = event;
  if(confirm("Delete this entry?"))
    target.parentElement.removeChild(target);
}