$(document).ready(function(){

    var help = document.getElementById("help"),
        res = document.getElementById("result"),
        arr = ["0","1","2","3","4","5","6","7","8","9"];
        arrC = ["+", "-", "/", "*"];

    $(".btn.btn-outline-light").click(function(){

        function operate(x){

            if(arr.includes(x)){

                x=parseInt(x);
                switch(x){
                    case 0:
                        if(res.value==""){
                        help.value+="0";
                        }
                    break;
    
                    case 1:
                        if(res.value==""){
                        help.value+="1";
                        }
                    break;
                    
                    case 2:
                        if(res.value==""){
                        help.value+="2";
                        }
                    break;
                    
                    case 3:
                        if(res.value==""){
                        help.value+="3";
                        }
                    break;
                    
                    case 4:
                        if(res.value==""){
                        help.value+="4";
                        }
                    break;
    
                    case 5:
                        if(res.value==""){
                        help.value+="5";
                        }
                    break;
    
                    case 6:
                        if(res.value==""){
                        help.value+="6";
                        }
                    break;
    
                    case 7:
                        if(res.value==""){
                        help.value+="7";
                        }
                    break;
    
                    case 8:
                        if(res.value==""){
                        help.value+="8";
                        }
                    break;
    
                    case 9:
                        if(res.value==""){
                        help.value+="9";
                        }
                    break;
                }
            }
            else{
                switch(x){
                    case "C":
                        res.value="";
                        help.value="";
                    break;
                    case ">":
                        help.value = help.value.slice(0,help.value.length-1);
                    break;
                    case "/":

                        if(res.value!=""){
                            help.value= res.value;
                            res.value= "";
                            help.value+="/"
                        }else{

                        if(help.value==""){}
                        else if(arrC.includes(help.value.charAt(help.value.length-1))){
                            help.value = help.value.substr(0,help.value.length-1);
                            help.value+="/";
                        }
                        else{help.value+="/";}
                        }
                    break;

                    case "X":

                        if(res.value!=""){
                        help.value= res.value;
                        res.value= "";
                        help.value+="*"
                        }else{

                        if(help.value==""){}
                        else if(arrC.includes(help.value.charAt(help.value.length-1))){
                        help.value = help.value.substr(0,help.value.length-1);
                        help.value+="*";
                        }
                        else{help.value+="*";}
                    }
                    break;

                    case "-": 
                    if(res.value!=""){
                        help.value= res.value;
                        res.value= "";
                        help.value+="-"
                        }else{

                        if(help.value==""){}
                        else if("-".includes(help.value.charAt(help.value.length-1))){
                        help.value = help.value.substr(0,help.value.length-1);
                        help.value+="-";
                        }
                        else{help.value+="-";}
                    }
                    break;

                    case "+":
                    if(res.value!=""){
                        help.value= res.value;
                        res.value= "";
                        help.value+="+"
                        }else{
                        if(help.value==""){}
                        else if(arrC.includes(help.value.charAt(help.value.length-1))){
                        help.value = help.value.substr(0,help.value.length-1);
                        help.value+="+";
                        }
                        else{help.value+="+";}
                    }
                    break;
                    
                    case "=": 
                        res.value=eval(help.value)
                        help.value="";
                    break;
                    case ".": 
                        if(res.value==""){
                           if(help.value=="" || "+-*/.".includes(help.value.charAt(help.value.lenght-1))){
                               help.value+="0.";
                           }else if(help.value.charAt(help.value.length-1)!="."){
                                help.value+=".";
                            }
                        }
                    break;
                    
                }
            }
        }

        let sign = this.value;
        operate(sign); 
    });
});