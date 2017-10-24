# cryptocurrencyClient

Install btcd


#Setting up the sandbox

Install go

```
apt-get install golang-go
```

Install glide

```
sudo add-apt-repository ppa:masterminds/glide 
sudo apt-get update
sudo apt-get install glide
```
##BTCD Installation guide

Please go though the following installation guide to setup the btcd and btcctl commands
https://github.com/btcsuite/btcd/blob/master/docs/README.md#PosixInstallation


```
./btcd --simnet --rpcuser=myuser --rpcpass=SomeDecentp4ssw0rd --miningaddr=SQ8DBqgNvz5mV3XYvNqog1UP6DGXu6S3cM
./btcwallet -u myuser -P SomeDecentp4ssw0rd --simnet --create
./btcwallet -u myuser -P SomeDecentp4ssw0rd --simnet

```

##External sources

This repository uses external applications from 

* https://github.com/btcsuite/btcd