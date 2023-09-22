let a = 1;

function getDaysInMonth(month, year){
    return new Date(year, month, 0).getDate();
}

function createCalendar(month, year){
    const calendar = document.querySelector("#calendar");
    calendar.innerHTML = '';
    let date = 1;
    const DayInMonth=getDaysInMonth(month + a, year);

        for (let i =0; i<6; i++){
            let week = document.createElement('tr');
            for(let j =0; j < 7; j++){
                if(i === 0 && j < new Date(year, month, 1).getDay() || date > DayInMonth){
                    let day = document.createElement('td');
                    week.appendChild(day);
                }
                else {
                    let day=document.createElement('td');
                    day.innerHTML=date;
                    week.appendChild(day);
                    date ++;
                }
            }
            calendar.appendChild(week);
        }
} 
 

const currentDate=new Date();
createCalendar(currentDate.getMonth(), currentDate.getFullYear());

const month = ["Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Decembre"];
const d = new Date();
let nom = month[d.getMonth()];
titreCal=document.querySelector("#moi");
titreCal.textContent=nom;

const prec = document.querySelector(".precedent");
prec.addEventListener("click",function() {
    a-=1;
    createCalendar(currentDate.getMonth(), currentDate.getFullYear());
    console.log("precedent");
    let nom = month[currentDate.getMonth()+a];
    console.log(a);
    console.log(nom);
    titreCal=document.querySelector("#moi");
    titreCal.textContent=nom;
});

const suiv = document.querySelector(".suivant");
suiv.addEventListener("click",function() {
    a+=1;
    createCalendar(currentDate.getMonth(), currentDate.getFullYear());
    console.log("suivant");
    let nom = month[currentDate.getMonth()+a];
    console.log(a);
    console.log(nom);
    titreCal=document.querySelector("#moi");
    titreCal.textContent=nom;
});
