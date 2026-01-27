#!/bin/bash
#!/bin/bash

set -e

sudo systemctl enable --now containerd
sudo systemctl enable --now docker.service
sudo systemctl enable --now docker.socket

ddev start
