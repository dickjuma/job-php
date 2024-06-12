const jobs=[{
    title:"Automative Engineer",
    image:"images/a-engineer.jpeg",
    details:"certified Automotive engineer with mininmum of 2years expirience is needed for this posts avialable ,apply through the email by pressing apply . attach a file of documents needed and provide your cv as well.",
    openPositions:"56",
    link:"/application"
},
{
    title:"Accounting",
    image:"images/acccounting.png",
    details:"certified accountant is needed for this posts avialable ,apply through the email by pressing apply . attach a file of documents needed and provide your cv as well.",
    openPositions:"1007",
    link:"/application"
},
{
    title:"Android Developer",
    image:"images/android.jpeg",
    details:"certified Android developer with skills in {java&backend}is needed for this posts avialable ,apply through the email by pressing apply . attach a file of documents needed and provide your cv as well.",
    openPositions:"57",
    link:"/application"
},
{
    title:"Aeronauticals",
    image:"images/aurinautical.jpeg",
    details:"Aeronautical speacialist is needed for this posts avialable ,apply through the email by pressing apply . attach a file of documents needed and provide your cv as well.",
    openPositions:"566",
    link:"/application"
},
{
    title:"Backend dev",
    image:"images/backend.jpeg",
    details:"certified backend developer skills{node js,djando&python,php} is needed for this posts avialable ,apply through the email by pressing apply . attach a file of documents needed and provide your cv as well.",
    openPositions:"344",
    link:"/application"
},
{
    title:"",
    image:"images/c-engineer.jpeg",
    details:"certified and Expirienced civil Engineer is needed for this posts avialable ,apply through the email by pressing apply . attach a file of documents needed and provide your cv as well.",
    openPositions:"567",
    link:"/application"
},
{
    title:"CEO post",
    image:"images/ceo.png",
    details:"certified and Expirienced CEO is needed for this posts avialable ,apply through the email by pressing apply . attach a file of documents needed and provide your cv as well.",
    openPositions:"88",
    link:"/application"
},
{
    title:"Database Admin",
    image:"images/database.png",
    details:"certified database adminstrator {should know linux} is needed for this posts avialable ,apply through the email by pressing apply . attach a file of documents needed and provide your cv as well.",
    openPositions:"17",
    link:"/application"
},
{
    title:"Dentist",
    image:"images/dentist.jpeg",
    details:"certified accountant is needed for this posts avialable ,apply through the email by pressing apply . attach a file of documents needed and provide your cv as well.",
    openPositions:"38",
    link:"/application"
},
{
    title:"software engineer",
    image:"images/download.jpeg",
    details:"certified software developer  is needed for this posts avialable ,apply through the email by pressing apply . attach a file of documents needed and provide your cv as well.",
    openPositions:"8",
    link:"/application"
},
{
    title:"Human Resource",
    image:"images/download.png",
    details:"certified human resource manager is needed for this posts avialable ,apply through the email by pressing apply . attach a file of documents needed and provide your cv as well.",
    openPositions:"199",
    link:"/application"
},
{
    title:"Financial analyst",
    image:"images/f-analyst.jpeg",
    details:"certified financial analyst is needed for this posts avialable ,apply through the email by pressing apply . attach a file of documents needed and provide your cv as well.",
    openPositions:"19",
    link:"/application"
},
{
    title:"Frond-end dev",
    image:"images/fornt.png",
    details:"Html+css+javascirpt for front end => is needed for this posts avialable ,apply through the email by pressing apply . attach a file of documents needed and provide your cv as well.",
    openPositions:"67",
    link:"/application"
},
{
    title:"Fullstack dev",
    image:"images/fullstack.png",
    details:"fullstack developer skills {node js, react js, html,css, bootsrap,mongo db} is needed for this posts avialable ,apply through the email by pressing apply . attach a file of documents needed and provide your cv as well.",
    openPositions:"23",
    link:"/application"
},
{
    title:"Kotlin programmer",
    image:"images/kotlin.png",
    details:"kotlin developer is needed for this posts avialable ,apply through the email by pressing apply . attach a file of documents needed and provide your cv as well.",
    openPositions:"33",
    link:"/application"
},
{
    title:"Law and related",
    image:"images/law.jpeg",
    details:"certified law specialist for short contract is needed for this posts avialable ,apply through the email by pressing apply . attach a file of documents needed and provide your cv as well.",
    openPositions:"44",
    link:"/application"
},
{
    title:"Managerial",
    image:"images/manager.jpeg",
    details:"certified manager is needed for this posts avialable ,apply through the email by pressing apply . attach a file of documents needed and provide your cv as well.",
    openPositions:"44",
    link:"/application"
},
{
    title:"Sales Marketer",
    image:"images/marketer.jpg",
    details:"certified marketer is needed for this posts avialable ,apply through the email by pressing apply . attach a file of documents needed and provide your cv as well.",
    link:"/application"

},
{
    title:"Network Admin",
    image:"images/network.png",
    details:"certified accountant is needed for this posts avialable ,apply through the email by pressing apply . attach a file of documents needed and provide your cv as well.",
    openPositions:"89",
    link:"/application"
},
{
    title:"Piloting &related",
    image:"images/s-analyst copy.jpeg",
    details:"certified accountant is needed for this posts avialable ,apply through the email by pressing apply . attach a file of documents needed and provide your cv as well.",
    openPositions:"45",
    link:"/application"
},
{
    title:"System Analyst",
    image:"images/s-analyst.jpeg",
    details:"certified accountant is needed for this posts avialable ,apply through the email by pressing apply . attach a file of documents needed and provide your cv as well.",
    openPositions:"345",
    link:"/application"
},
{
    title:"Designers",
    image:"images/s-design.jpeg",
    details:"certified accountant is needed for this posts avialable ,apply through the email by pressing apply . attach a file of documents needed and provide your cv as well.",
    openPositions:"44",
    link:"/application"
},
{
    title:"Secretariate post",
    image:"images/secretary.jpeg",
    details:"certified accountant is needed for this posts avialable ,apply through the email by pressing apply . attach a file of documents needed and provide your cv as well.",
    openPositions:"44",
    link:"/application"
},
{
    title:"Surveyer",
    image:"images/survey.jpeg",
    details:"certified surveyer is needed for this posts avialable ,apply through the email by pressing apply . attach a file of documents needed and provide your cv as well.",
    openPositions:"44",
    link:"/application"
},
{
    title:"Swift developer",
    image:"images/swift.png",
    details:"certified swift is needed for this posts avialable ,apply through the email by pressing apply . attach a file of documents needed and provide your cv as well.",
    openPositions:"82",
    link:"/application"
}
/*{
    title:"",
    image:"",
    details:"",
    openPositions:"",
    link:""
}*/
];
const jobsAvialable=document.querySelector(".jobs-list-container h2");
const jobsContainer=document.querySelector(".jobs-list-container .jobs");
const jobSearch=document.querySelector(".jobs-list-container .job-search");
let searchTerm="";
if(jobs.length==1){
    jobsAvialable.innerHTML=`${jobs.length} Job Avialable`;

}
else{
jobsAvialable.innerHTML=`${jobs.length} Jobs Avialable`;
}


const createJobListingCards =()=>{
    jobsContainer.innerHTML="";
    jobs.forEach(job=>{
        if (job.title.toLowerCase().includes(searchTerm.toLowerCase())){
        let jobCard=document.createElement("div");
        jobCard.classList.add("job");

        let imagecard=document.createElement("img");
        imagecard.src=job.image;

        let title=document.createElement("h3");
        title.innerHTML=job.title;
        title.classList.add("job-title");

        let details=document.createElement("div")
        details.innerHTML=job.details;
        details.classList.add("details");

        let apply=document.createElement("a");
        apply.href=job.link;
        apply.innerHTML="apply";
        apply.classList.add("details-btn");

        let openPositions=document.createElement("span");
        openPositions.classList.add("open-positions");
        if(openPositions==1){
            openPositions.innerHTML=`${job.openPositions} open position`;
        }
        else{
                openPositions.innerHTML=`${job.openPositions} open positions`;
        }

jobCard.appendChild(imagecard);
jobCard.appendChild(title)
jobCard.appendChild(details)
jobCard.appendChild(apply)
jobCard.appendChild(openPositions)

jobsContainer.appendChild(jobCard);
   }

    });
};
createJobListingCards();

jobSearch.addEventListener("input",(e)=>{
    searchTerm= e.target.value;
    createJobListingCards();
})
