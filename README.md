# Normal distribuition api

## A quick way to have amounts normally distributed

### *To run the api, I assume that the user already have the Docker installed in the computer*

Once you have Docker installed, just run the following command:

```
docker compose up -d --build
```

You made available an endpoint in the computer to get normally distributed amounts:
```
http://localhost:1080/
```
If you want to access this values from your network:
```
http://THE_IP_OF_YOUR_MACHINE:1080/
```
... and have access to the normally distributed values accessed by other devices.

The result:
```json
[
    12309.8066158035,
    11155.8249364861,
    7655.39475722573,
    12761.8983457353,
    11300.6440383841,
    11831.7896864538,
    5561.9374198884,
    7240.08136948785,
    7098.92661196942,
    6991.784570651,
    7322.87217206327,
    10514.203688409,
    10690.6992618269,
    7060.99172121504,
    11401.879981628,
    10574.0096590953,
    8594.17098967046,
    9708.98997264294,
    11885.8558038018,
    9322.05835563786
]
```

## Setting standard deviation, mean and samples amount

```
http://localhost:1080/http://localhost:1080/?samples=10&std_deviation=50&mean=200000
```
