$(document).ready(function(){

    var help = document.getElementById("help"),
        res = document.getElementById("result"),
        arr = ["0","1","2","3","4","5","6","7","8","9"];
        arrC = ["+", "-", "/", "*"];

        function operationChar(x){
            if(res.value!=""){
                help.value= res.value;
                res.value= "";
                help.value+=x;
            }else{

            if(help.value==""){}
            else if(arrC.includes(help.value.charAt(help.value.length-1))){
                help.value = help.value.substr(0,help.value.length-1);
                help.value+=x;
            }
            else{help.value+=x;}
            }
        }

        function writeNumber(num){
            if(res.value==""){
                help.value+=num;
                }
        }




    $(".btn.btn-outline-light").click(function(){

        function operate(x){

            if(arr.includes(x)){

                x=parseInt(x);
                switch(x){
                    case 0:
                       writeNumber("0");
                    break;
    
                    case 1:
                        writeNumber("1");
                    break;
                    
                    case 2:
                        writeNumber("2");
                    break;
                    
                    case 3:
                        writeNumber("3");
                    break;
                    
                    case 4:
                        writeNumber("4");
                    break;
    
                    case 5:
                        writeNumber("5");
                    break;
    
                    case 6:
                        writeNumber("6");
                    break;
    
                    case 7:
                        writeNumber("7");
                    break;
    
                    case 8:
                        writeNumber("8");
                    break;
    
                    case 9:
                        writeNumber("9");
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
                        operationChar("/")
                    break;

                    case "X":
                        operationChar("*");
                    break;

                    case "-": 
                        operationChar("-");
                    break;

                    case "+":
                        operationChar("+");
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

    $(".memoryModule button").click(function(){

        let dataPlace = this.parentElement.parentElement.children[1];
        //odwołanie do miejsca gdzie bedziemy przechowywać liczbe

        switch(this.innerHTML){
            case "M+":
                dataPlace.value=res.value;
                res.value="";
            break;

            case "M-":
                dataPlace.value="";
            break;

            case "MR":
                help.value+=dataPlace.value;
                dataPlace.value="";
            break;
        }

    });

});