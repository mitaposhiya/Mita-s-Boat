you can practice from here
   
 
       
//        const name="jjus"
//        const age=50

//        console.log(`hello my name is ${name} and age is ${age}`);

//        const intro = new String('hitesh nina nina')
//     // matchall() , includes(), startwith(), endswith() does not support in internet
//     console.log(intro[0]);
//     console.log(intro.__proto__);
//     console.log(intro.length);
//     console.log(intro.toUpperCase());
//     console.log(intro.charAt(3));
//     console.log(intro.charCodeAt(0));
//     console.log(intro.at(3));
//     console.log(intro.slice(0,8));//2 parameter  as index
//     console.log(intro.substr(5,8));//second parameter as lenth 
//     console.log(intro.trim());
//     console.log(intro.padEnd(9,"b"));
//     console.log(intro.repeat(3));
//     console.log(intro.replace(/nina/g,"vina"));
//     console.log(intro.split(" "));
//     console.log(intro.lastIndexOf("nina"));
//     console.log(intro.search(/hitesh/));
//     console.log(intro.match(/i/gi));
//     console.log(intro.includes("nina"));
//     console.log(intro.startsWith("h"));
 

//     const score= new Number(1100.8943)
//     console.log(score.toPrecision(3));
//     const score1= new Number(100.8943)
//     console.log(score1.toFixed(3));
//     const score2= new Number(1000000)
//     console.log(score2.toLocaleString('en-IN'));
//     console.log(score2.toExponential(2));

//     console.log(Math.abs(-3424));
//     console.log(Math.round(7.8424));
//     console.log(Math.ceil(7.824));
//     console.log(Math.floor(7.824));
   
//     const mydate=new Date()
//     console.log(mydate.toString());
//     console.log(mydate.toDateString());
//     console.log(mydate.toLocaleString());
//     console.log(typeof mydate);


//     const arr =new Array(1,2,3,4)
   
//     arr.push(2);//add in last
//     console.log(arr);
//     arr.pop(2);
//     console.log(arr);
//     arr.unshift(2);//add in front
//     console.log(arr);
//     arr.shift(2);
//     console.log(arr);
//     console.log(arr.includes(5));
//     console.log(arr.indexOf(5));
//     console.log(arr.slice(1,3));// only part of arr can extract,2 parameter as index
//     console.log(arr);
//     console.log(arr.splice(1,3));// part of arr can remove,2 parameter as a length
//     console.log(arr);
    
//     const fruit=["apple","cherry","banana","mango"]
//     fruits=fruit.toSorted();//keeping original values as it is while sort() method alter the original value of array
//     console.log(fruits);
//     fruits1=fruit.toReversed();//keeping original values as it is while reverse() method alter the original value of array
//     console.log(fruit);

//     const point=[1,42,20,45,55]
//     point.sort(function(a,b){return a - b}); //if we took 1 and 42 then  1-42=-41 then first put 1 and  if value is positive then keep 2nd value // we want in desendig then put b-a
//     console.log(point);

//     const arr1=arr.join()
//     console.log(arr1);
//     console.log(typeof arr1);
 


//     const color1=['red','green','yellow']
//     const color2=['violet','peach','babypink']

//     color1.push(color2)
//     console.log(color1);// add 2nd array in 1st array

//     const colordark=['red','green','yellow']
//     const colorlight=['violet','peach','babypink']
//     colormix=colordark.concat(colorlight)// concat array and add in 3rd new array, its concat only one array
//     console.log(colormix);
//     colormix=[...colordark,...colorlight]//sperad can concat multiple array
//     console.log(colormix);

//     const flatarr = [1,2,[3,4],[5,6],[7,8,[9,2]]]
//     console.log(flatarr.flat(Infinity));

//     console.log(Array.isArray("hitesh"));
//     console.log(Array.from("hitesh"));

//     let s1=100;
//     let s2=200;
//     console.log(Array.of(s1,s2));

//     //const tinderuser =new Object() //singleton
//     const tinderuser={} //nonsingleton
//     tinderuser.id="2324";
//     tinderuser.name="mita";
//     console.log(tinderuser);

//     const obj1={1: "a" , 2:"b",5:"jhj",6:"yutyjy"}
//     const obj2={3:"c", 4:"d"}
//     const obj3={...obj1, ...obj2}
//     console.log(obj3);
//     console.log(obj1);
//     console.log(Object.keys(obj1));
//     console.log(Object.values(obj1));
//     console.log(Object.entries(obj1));// give the array key and value in array
//     console.log(obj1.hasOwnProperty('loggedin'));// true or in false
    

//     const course={
//       coursename:"js",
//       price:"4444",
//       instructor:"mita"
//     }
//     const {instructor:i}=course//clean code in behalf course.instuctor
//     console.log(i);

//    function price(...num1){// ... is a rest operator not a sperad operator, if we add (var1,...num1) ans is only[400,500,5000]
//       return num1
//    }
//    console.log(price(200,400,500,5000));


//    var b=300;
//    if(true){
//     //  let a=10; we can use let inside a block scope only , we  can not access outside the scope
//       var b=20;
//      // const c=30; same as let
//    }
//    //console.log(a);
//    console.log(b);
//    //console.log(c);

//    console.log(add(5))
//    function add(num){
//       return  num+1
//    }
   

//   const sub=function (num){ 
//       return num-1//explicit return
//    }
//    console.log(sub(5))


// function chai(){
//    let user="dsdsf"
//    console.log(this.user); // we can not use this keyword in function or arrow function only in object
// }
// chai()

// //arrow function
// const chai1=(num1,num2)=>( num1+num2)//implicit return// can not need to type return, we use return only in () this
// console.log(chai1(2,3));


// //automaticaly invoked function, to remove global scope's pollution
// (function chai2(){
//    console.log('db connected');
// })();// iife function

// ( (name)=>
// {
//    console.log(`DB CONNECTED TO ${name}`);//u can use two iife at time with type ; between two iife
// }
// )('mita')

// const temperture = 41
// if( temperture === 41){
//    console.log("executed");
// }


// const d=new Date("2021-03-25")
// console.log(d.getFullYear());
// console.log(d.getDate());
// console.log(d.getDay());
// console.log(d.getHours());
// console.log(d.getMinutes());
// console.log(d.getSeconds());
// console.log(d.getDay());
// console.log(d.getTime());


// let ms =Date.now()
// console.log(ms);


// let text=" "
// const letters=["a","b","c","d","e"]
// for(const x of letters){
//    text += x
 
// }
// console.log(text);


// let x= 10//nullish opertaor
// let y= x ?? 5
// console.log(y);


// //switch case
// const month = "march"
// switch(month)
// {
//    case "jan":
//       console.log("jan");
//       break;
//    case "feb":
//          console.log("feb");
//          break;
//    case "march":
//           console.log("march");
//           break;
                  
//    case "april":
//          console.log("april");
//          break;
//    case "may":
//           console.log("may");//truthy value:  "0", 'false'," " ,[], {},function(){}
//                     break;
//   default:
//      console.log("no one ");//falsy value  false,0,-0,bigint 0n,null,undefined,NaN
  
// }

// //nullish coalescing operator
// let val1 // if first parameter is null then print second other wise 
// let val= val1 ?? null
// console.log(val);

// for(let i=1 ; i<=2; i++)
// {
//    for(let j=1 ; j<=10  ;j++)
//       console.log(i +'*'+ j +'='+ i*j);
// }


// let myarray =['a','b','c','d']
// for(let index=0 ; index< myarray.length ; index++)
// {
//    const element = myarray[index]
//    console.log(element);
// }

// const car = ['swift','toyoto','bmw']

// for(const cars of car){
//    console.log(cars);
// }

// const map =new Map()//map used for unique value ,map is itreable for of loop ,object is for in loop
// map.set('in', "india")
// map.set('fr',"france")
// map.set('in', "india")
// console.log(map);
// for(const [key, value]of map){ // we want to print only key or only value
//    console.log(key ,'- ',value);
// }


// const obj = {
//    js :'javascript',
//    html :'html'
// }
// for(const key in obj){
//    console.log(`${key} is for ${obj[key]}`);
// }

// const coding =['js','py','php']// for each doen not return values of array ,they always been undefined
// const value = coding.forEach((val)=> {
//    console.log(val); 
// })
// console.log(value);
// function printMe(coding){
//    console.log(coding);

// }
// coding.forEach(printMe);

// const num =[1,2,3,4,5,6,7] //filtr gives a return value, thats why you hve to declare a variable //u can use foreach but it become big code
// const newnum = num.filter((num)=>num>4)
// console.log(newnum);

const books =[
   {title:"js" , edition:2004},
   {title:"html" , edition:2005},
   {title:"java" , edition:2007},
   {title:"php" , edition:2007},
   {title:"laravel" , edition:2009}
];

let userbooks=books.filter((books)=>books.edition === 2007 && books.title =="php")
console.log(userbooks)

const nums=[1,2,3,4,5,6,7,8,9]
const newnums =nums
               .map((nums) => nums*10)
               .map((num) => num+1)
               .filter((num)=> num <=40)
console.log(newnums);

 const x=[1,2,3,4]
 const total = x.reduce( (acc , curr) => acc+curr, 0 )
 
 console.log(total);

// const shoppingcart=[

//    { item:"mobile",
//       price:12000
//    },
//    { item:"tv",
//       price:12060
//    },
//    { item:"ps5",
//       price:12990
//    },
//    { item:"laptop",
//       price:13990
//    }
// ];
//  const price =shoppingcart.reduce((acc, item) => acc + item.price ,0)
// console.log(price);

//encapsulation:It is used to hide the data from the outside world and give access to required data only to improve the integrity and security of the data.
// you can use fuction in this and getter and setter method
//three types of inheritance 1. single 2.multilevel 3.hierarchical   super():invokes the parent methods and properties
// we can use this on behalf  of mujltilevel inheritance
// class Facebook {
//   constructor(socialNetwork, adProvider) {
//    this.socialNetwork = socialNetwork;
//    this.adProvider = adProvider;
//  }
// }
// const fb = new Facebook(new SocialNetwork(), new AdProvider());

//DOM, .getelementbyclassname .getelementbyid() .getattribute() .innerHTML  .innertext  .innercontent  .queryselector  .queryselectrall






//JSON and XML are used on the client side to exchange data between the web server and the client.
//XMLHttpRequest − It is used to perform asynchronous data exchange between a web browser and a web server
