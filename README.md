# tutoring-backend

## how to run

We use [docker](https://docker.io), specifically docker-compose. To run this application simply install docker and docker-compose and then do

```
$ docker-compose up
```

If you get an error about docker the docker daemon not running, try doing the following

### Linux with systemd

```
# systemctl enable --now docker
```

### macOS with docker desktop

Start the desktop app, it will start a docker daemon after you entered your password.

### Windows

TODO
