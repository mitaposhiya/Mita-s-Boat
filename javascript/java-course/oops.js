// // javascript have prototype language

// //object:collection of properties nad methods
// //object literals
// const user={
//     username:"miyas",
//     logincount:8,

//     getdetail:function(){
//         //console.log("from database");
//         console.log(`${this.username}`);// we use wher we want define current 
//         console.log(this);//give all detail
        
        
        
//     }
// }
// console.log(user.username);
// console.log(user.getdetail());
// console.log(this);


// //constructor
// function userdetail(name,logincount, islogin){
//     this.name=name;
//     this.logincount=logincount;
//     this.islogin=islogin;

// }

// const user1 = new userdetail("dwas",12,true)
// const user2 = new userdetail("dwaedfss",17,false)
// console.log(user1);
// console.log(user2);



//constructor
// class userinfo {
//     constructor(username,email,password){
//         this.username=username
//         this.email=email
//         this.password=password
//     }
//     encryptpassword(){
//         return `${this.password}:abc`
//     }
// }

// const chai=new userinfo("chai","chjai@gmail.vom",1234)
// console.log(chai.encryptpassword())

//behind the scene(constructor)
// function userinfo(username,email,password) {
//     this.username=username
//         this.email=email
//         this.password=password
// }
// userinfo.prototype.encryptpassword = function(){
//     return `${this.password}:abc`
// }
// const tea=new userinfo("tea","chjai@gmail.vom",1234)
// console.log(tea.encryptpassword())



//inheritance
class user{
   constructor(username){
    this.username=username
   }
   logme(){
    console.log( `${this.username}`);
    
   }
}

class teacher extends user{
    constructor(username,id){
        super(username)
        this.id=id
    } 
    addcourse(){
        console.log(`course add in ${this.username}`);
        
    }
}

const user1= new teacher("chia","34");
user1.addcourse()

//getter nd setter
function usergetset(email,pass)
{
    this.email = email;
    this.pass = pass;

    Object.defineProperty(this , 'email',{
        get: function(){
            return this.email
        },
        set: function(value){
            this.email = value
        }
    })
    Object.defineProperty(this , 'pass',{
        get: function(){
            return this.pass
        },
        set: function(value){
            this.pass = value
        }
    })
}

const user2= new usergetset("hdfs@gmail.com" ,"2344")
console.log(user2.pass);
