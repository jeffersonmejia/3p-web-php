#!/bin/bash
#!/bin/bash

set -e


sudo systemctl disable --now containerd
sudo systemctl disable --now docker.service
sudo systemctl disable --now docker.socket

ddev poweroff
