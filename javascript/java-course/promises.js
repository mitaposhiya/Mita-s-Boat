//promise:The Promise object represents the eventual completion (or failure) of an asynchronous operation and its resulting value.
//A Promise is a proxy for a value not necessarily known when the promise is created. pendine,fulfilled,rejected
//you can access files through kernel , can not access directly through programming.
//you can use async wait() or promise
// if we get error404  in promise  then we get as a response not in fetch(resolve) or reject
const promiseone = new Promise(function (resolve, reject) {
  //do an async task
  //db calls

  setTimeout(function () {
    console.log("saync is complete");
    resolve();
  }, 1000);
});

promiseone.then(function () {
  console.log("promise consumed");
});

// if we dont want save in variable
new Promise(function (resolve, reject) {
  setTimeout(function () {
    console.log("saync task2");
    resolve();
  }, 1000);
}).then(function () {
  console.log("async 2 is resolved");
});

// for pass data as object or function
const promisethree = new Promise(function (resolve, reject) {
  setTimeout(function () {
    resolve({ iD: 1222, name: "mita", email: "mita@gmail.com" });
  }, 1000);
});
promisethree.then(function (user) {
  console.log(user);
});

//four
const promisefour = new Promise(function (resolve, reject) {
  setTimeout(function () {
    let error = false;
    if (!error) {
      resolve({ username: "amit", password: "1334442" });
    } else {
      reject("ERROR : something wrong");
    }
  }, 1000);
});
promisefour
  .then((user) => {
    //when you want to take data then you can not store in variable
    return user.username;
  })
  .then((username) => {
    console.log(username);
  })
  .catch(function (error) {
    console.log(error);
  })
  .finally(() => console.log("resolved"));

//five
//we use async when db is not set and we dont want go further
const promisefive = new Promise(function (resolve, reject) {
  setTimeout(function () {
    let error = false;
    if (!error) {
      resolve({ name: "javasvript", addition: "2021" });
    } else {
      reject("ERROR: javascript went wrong");
    }
  }, 1000);
});

async function consumepromisefive() {
  //can to handle catch gracefullly
  try {
    const response = await promisefive;
    console.log(response);
  } catch (error) {
    console.log(error);
  }
}
consumepromisefive();

//when we want to fetch data(either this)
async function getallusers() {
  try {
    const response = await fetch(
      "https://api.github.com/users/hiteshchoudhary"
    );
    const data = await response.json();
    console.log(data);
  } catch (error) {
    console.log("E", error);
  }
}
getallusers();

//(or this)
fetch("https://api.github.com/users/hiteshchoudhary")
  .then((response) => {
    return response.json();
  })
  .then((response) => {
    //for handle response
    console.log(response);
  })
  .catch((error) => console.log("error"));

// fetch() have microtask queue who is a fast queue thats why we get first fetch result then we get other results
//if we get 404 error ,error goes in onfulfield[] becuse error pass through the network
//if network request is cancel then goes in onregection[fun]
