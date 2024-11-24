#!/bin/bash

# Install necessary packages
apt-get update && apt-get install -y libssl1.0-dev

# Continue with the usual build process
vercel build