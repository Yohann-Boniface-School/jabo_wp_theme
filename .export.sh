#!/bin/bash

export_path="/srv/http/wordpress/wp-content/themes/jabo/"

if [ -d "$export_path" ]
then
  echo "[-] Removing previous export"
  sudo rm -rf $export_path
  echo "[+] recreating directory $export_path"
fi

sudo mkdir -p $export_path

sudo cp -r ./* $export_path
sudo rm -rf $export_path/docs

echo "[+] Done"
