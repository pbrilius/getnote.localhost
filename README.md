# c2c-mvc.pbgroupeu

A small scale - based on _Composer_ dependencies - **MVC - ORM** application project. It can be used on low-intensity resources consumption _PHP_ _e-benchmarks_ inferred environments like concerns of _e-commerce_ & _e-loans_.

Intended for _commercial_ use for enterprise sccale projects, so called **Friedman** stage scope, where the main goal and _labeled_ _consumption_ is government registered **profit** - _for profit_ entity.

## Installation & set up

```shell
mkdir log
touch log/app.log
chmod o+rw -R log
```

Proxies:

```shell
mkdir proxy
chmod o+rw proxy
```

## Vendor - parent company

```shell
ln -s vendor/pbrilius/c2c-mvc.pbgroupeu/* . -v
ln -s vendor/pbrilius/c2c-mvc.pbgroupeu/.* . -v
mkdir config/xml
rm -fv {config,routes,templates,README.md,bootstrap.php}
cp -rdfv vendor/pbrilius/c2c-mvc.pbgroupeu/{config,routes,templates,README.md,bootstrap.php} .
```

## Environment

```shell
cp .env.dist .env -v
cd vendor/pbrilius/c2c-mvc.pbgroupeu
ln -s ../../../.env . -v
ln -s ../../../log . -v
ln -s ../../../proxy . -v
ln -s ../../../vendor . -v
```

## Checkout

```shell
cd ../../../
vendor/bin/doctrine list
```
