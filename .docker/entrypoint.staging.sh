#!/bin/bash

if [ ! -f ".env" ]; then
  cp .env.example .env
fi
if [ ! -f ".env.testing" ]; then
  cp .env.testing.example .env.testing
fi
chmod +x .docker/entrypoint.prod.sh && .docker/entrypoint.prod.sh
