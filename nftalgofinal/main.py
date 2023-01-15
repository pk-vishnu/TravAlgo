#!/home/vishnupk/miniconda3/bin/python
import json
import hashlib
import os
from algosdk import mnemonic
from algosdk.v2client import algod
from algosdk.future.transaction import AssetConfigTxn, wait_for_confirmation
from create_account import create_account
from closeout_account import closeout_account


f=open('../app/id.json')
id=json.load(f)
i=id['id']
    

def create_non_fungible_token():
  #print("--------------------------------------------")
  #print("Creating account...")
  accounts = {}
  m = "tennis lend hello doctor market segment now already adjust later example mix undo civil slight network dragon link thing adult guard hurdle dress absorb normal"
  accounts[1] = {}
  accounts[1]['pk'] = mnemonic.to_public_key(m)
  accounts[1]['sk'] = mnemonic.to_private_key(m)
  #print(accounts)


  algod_token = "2f3203f21e738a1de6110eba6984f9d03e5a95d7a577b34616854064cf2c0e7b"
  algod_address = "https://academy-algod.dev.aws.algodev.network/"
  algod_client = algod.AlgodClient(algod_token, algod_address)

  #print("--------------------------------------------")
  #print("Creating Asset...")

  params = algod_client.suggested_params()
  dir_path = os.path.dirname(os.path.realpath(__file__))
  f = open (dir_path + '/TravalgoNFT.json', "r")

  metadataJSON = json.loads(f.read())
  metadataStr = json.dumps(metadataJSON)

  hash = hashlib.new("sha512_256")
  hash.update(b"arc0003/amj")
  hash.update(metadataStr.encode("utf-8"))
  json_metadata_hash = hash.digest()

  txn = AssetConfigTxn(
      sender=accounts[1]['pk'],
      sp=params,
      total=1,
      default_frozen=False,
      unit_name="Flight",
      asset_name=f"Flight{i}",
      manager=accounts[1]['pk'],
      reserve=None,
      freeze=None,
      clawback=None,
      strict_empty_address_check=False,
      url="https://path/to/my/asset/details", 
      metadata_hash=json_metadata_hash,
      decimals=0)

  stxn = txn.sign(accounts[1]['sk'])

  txid = algod_client.send_transaction(stxn)
  #print("Asset Creation Transaction ID: {}".format(txid))
  print(txid)
  d={'nftid':txid}
  tokenid=json.dumps(d)
  tokenfile=open("token.json",'w')
  tokenfile.write(tokenid)
  tokenfile.close()
create_non_fungible_token()