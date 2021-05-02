document.getElementById("submitTime").onclick = timeCalc;

//Kun uniaikasivuilta painetaan tallennusnappia, funktio laskee syötetyistä arvoista uniajan ja siirtää lasketun ajan takaisin unisivulle

function timeCalc() {

    let sleep = new Date().toDateString("yyyy-MM-dd") + " " + document.getElementById("sleep").value;
    let awake = new Date().toDateString("yyyy-MM-dd") + " " + document.getElementById("awake").value;
    
    
    if(sleep < awake){
        let diff = (new Date(awake) - new Date(sleep)) / 60/ 60 / 1000;
        document.getElementById("diff").innerHTML = (diff);
        console.log(diff);}

    else{ 
    let diff = (24 - new Date(sleep) / 60/ 60 / 1000 + new Date(awake)/ 60/ 60 / 1000);
    document.getElementById("diff").innerHTML = (diff);
    console.log(diff);
    }
    }