# Requirements

Everything should return json (Header Document-Type: `application/json`)

## `GET /subjects`

Returns a list of all subjects in human-readable form.

### example response (incomplete)
```json
{
    "data": [
        "Englisch",
        "Deutsch",
        "Mathematik"
    ]
}
```


## `GET /offers?subject=asdf&grade=8`

Returns a list of offers matching criteria like subject and grade

```json
{
    "data": [
        {
            "id": 32,
            "teacher": {
                "id": 1,
                "name": "Max Mustermann",
                "email": "max.mustermann@gymhaan.de",
                "grade": 11,
                "misc": "asldhjgalksjdghakljsdgh"
            },
            "subject": "Englisch",
            "maxGrade": 11
        },
        {
            "id": 34,
            "teacher": {
                "id": 1,
                "name": "Max Mustermann",
                "email": "max.mustermann@gymhaan.de",
                "grade": 11,
                "misc": "asldhjgalksjdghakljsdgh"
            },
            "subject": "Mathematik",
            "maxGrade": -1
        }

    ]
}
```
