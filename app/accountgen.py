#!/home/vishnupk/miniconda3/bin/python
from algosdk import account, mnemonic
from algosdk.v2client import algod
algod_token = "2f3203f21e738a1de6110eba6984f9d03e5a95d7a577b34616854064cf2c0e7b"
algod_address = "https://academy-algod.dev.aws.algodev.network/"
algod_client = algod.AlgodClient(algod_token, algod_address)
secret_key, my_address = account.generate_account()
m = mnemonic.from_private_key(secret_key)
secret_key, my_address = account.generate_account()
print(my_address)
print(m)