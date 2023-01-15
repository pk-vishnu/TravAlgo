const algosdk = require('algosdk');
const createAccount = function () {}
    try {        const myaccount = algosdk.generateAccount();
        console.log("Account Address = " + myaccount.addr);
        let account_mnemonic = algosdk.secretKeyToMnemonic(myaccount.sk);
        console.log("Account Mnemonic = " + account_mnemonic);
        return myaccount;  }
    catch (err) {}