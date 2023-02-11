# Chess Piece Image Recognizer

In this repository, a chess piece image recognizer is created using a multilayer neural network trained on the [2D Chessboard and Chess Pieces](https://universe.roboflow.com/chess-project/2d-chessboard-and-chess-pieces) dataset.

For further information, please visit:

- [MNIST Handwritten Digit Recognizer](https://github.com/RubixML/MNIST)

---

Remove all files in the `testing` and the `training` folders.

```
$ php cleanup.php
```

Prepare 20,000 samples for further training.

```
$ php prepare.php 20000 training
```

Train the neural network.

```
$ php train.php
```

Prepare 20,000 samples for further testing.

```
$ php prepare.php 20000 testing
```

Make predictions.

```
$ php validate.php
```

Below is an excerpt from an example report.

```
{
    "breakdown": {
        "overall": {
            "accuracy": 0.9996379441457468,
            "balanced accuracy": 0.9987145678616661,
            "f1 score": 0.9966338928268637,
            "precision": 0.9956928322856964,
            "recall": 0.9976232377200914,
            "specificity": 0.9998058980032408,
            "negative predictive value": 0.9998029579660271,
            "false discovery rate": 0.004307167714303643,
            "miss rate": 0.002376762279908633,
            "fall out": 0.0001941019967590748,
            "false omission rate": 0.0001970420339729461,
            "mcc": 0.9964510721949836,
            "informedness": 0.9974291357233322,
            "markedness": 0.9954957902517235,
            "true positives": 19952,
            "true negatives": 239424,
            "false positives": 47,
            "false negatives": 47,
            "cardinality": 19999
        },
        "classes": {
            "B": {
                "accuracy": 0.9992487604547503,
                "balanced accuracy": 0.9954655380894801,
                "f1 score": 0.9954448830853325,
                "precision": 1,
                "recall": 0.9909310761789601,
                "specificity": 1,
                "negative predictive value": 0.999181580096028,
                "false discovery rate": 0,
                "miss rate": 0.009068923821039854,
                "fall out": 0,
                "false omission rate": 0.000818419903972023,
                "informedness": 0.9909310761789603,
                "markedness": 0.999181580096028,
                "mcc": 0.9950477769749304,
                "true positives": 1639,
                "true negatives": 18313,
                "false positives": 0,
                "false negatives": 15,
                "cardinality": 1654,
                "proportion": 0.08270413520676034
            },
            "P": {
                "accuracy": 0.9982988091664164,
                "balanced accuracy": 0.9958443390337638,
                "f1 score": 0.9899586532782043,
                "precision": 0.9870435806831567,
                "recall": 0.9928909952606635,
                "specificity": 0.9987976828068641,
                "negative predictive value": 0.9993438320209974,
                "false discovery rate": 0.012956419316843326,
                "miss rate": 0.007109004739336511,
                "fall out": 0.0012023171931359045,
                "false omission rate": 0.0006561679790025865,
                "informedness": 0.9916886780675276,
                "markedness": 0.9863874127041541,
                "mcc": 0.9890344935173047,
                "true positives": 1676,
                "true negatives": 18276,
                "false positives": 22,
                "false negatives": 12,
                "cardinality": 1688,
                "proportion": 0.08440422021101054
            },
            "b": {
                "accuracy": 1,
                "balanced accuracy": 1,
                "f1 score": 1,
                "precision": 1,
                "recall": 1,
                "specificity": 1,
                "negative predictive value": 1,
                "false discovery rate": 0,
                "miss rate": 0,
                "fall out": 0,
                "false omission rate": 0,
                "informedness": 1,
                "markedness": 1,
                "mcc": 1,
                "true positives": 1590,
                "true negatives": 18362,
                "false positives": 0,
                "false negatives": 0,
                "cardinality": 1590,
                "proportion": 0.07950397519875994
            },
            "K": {
                "accuracy": 0.9994489806141361,
                "balanced accuracy": 0.9996995520594341,
                "f1 score": 0.9966917293233083,
                "precision": 0.9934052757793765,
                "recall": 1,
                "specificity": 0.9993991041188681,
                "negative predictive value": 1,
                "false discovery rate": 0.00659472422062346,
                "miss rate": 0,
                "fall out": 0.0006008958811318799,
                "false omission rate": 0,
                "informedness": 0.9993991041188681,
                "markedness": 0.9934052757793765,
                "mcc": 0.9963976829764639,
                "true positives": 1657,
                "true negatives": 18295,
                "false positives": 11,
                "false negatives": 0,
                "cardinality": 1657,
                "proportion": 0.08285414270713536
            },
            "k": {
                "accuracy": 1,
                "balanced accuracy": 1,
                "f1 score": 1,
                "precision": 1,
                "recall": 1,
                "specificity": 1,
                "negative predictive value": 1,
                "false discovery rate": 0,
                "miss rate": 0,
                "fall out": 0,
                "false omission rate": 0,
                "informedness": 1,
                "markedness": 1,
                "mcc": 1,
                "true positives": 1666,
                "true negatives": 18286,
                "false positives": 0,
                "false negatives": 0,
                "cardinality": 1666,
                "proportion": 0.08330416520826041
            },
            "N": {
                "accuracy": 0.9995491207855318,
                "balanced accuracy": 0.997515724319848,
                "f1 score": 0.997229916897507,
                "precision": 0.999383096853794,
                "recall": 0.995085995085995,
                "specificity": 0.999945453553701,
                "negative predictive value": 0.9995637949836423,
                "false discovery rate": 0.0006169031462059937,
                "miss rate": 0.004914004914004955,
                "fall out": 5.454644629898642e-5,
                "false omission rate": 0.0004362050163576603,
                "informedness": 0.9950314486396961,
                "markedness": 0.9989468918374365,
                "mcc": 0.9969872481125954,
                "true positives": 1620,
                "true negatives": 18332,
                "false positives": 1,
                "false negatives": 8,
                "cardinality": 1628,
                "proportion": 0.08140407020351018
            },
            "R": {
                "accuracy": 0.999749461341885,
                "balanced accuracy": 0.9987061691116625,
                "f1 score": 0.9984152139461173,
                "precision": 0.9993654822335025,
                "recall": 0.9974667511082964,
                "specificity": 0.9999455871150288,
                "negative predictive value": 0.9997823839834612,
                "false discovery rate": 0.0006345177664974777,
                "miss rate": 0.002533248891703588,
                "fall out": 5.4412884971211106e-5,
                "false omission rate": 0.00021761601653880192,
                "informedness": 0.9974123382233251,
                "markedness": 0.9991478662169637,
                "mcc": 0.9982797250642267,
                "true positives": 1575,
                "true negatives": 18377,
                "false positives": 1,
                "false negatives": 4,
                "cardinality": 1579,
                "proportion": 0.07895394769738487
            },
            "n": {
                "accuracy": 1,
                "balanced accuracy": 1,
                "f1 score": 1,
                "precision": 1,
                "recall": 1,
                "specificity": 1,
                "negative predictive value": 1,
                "false discovery rate": 0,
                "miss rate": 0,
                "fall out": 0,
                "false omission rate": 0,
                "informedness": 1,
                "markedness": 1,
                "mcc": 1,
                "true positives": 1716,
                "true negatives": 18236,
                "false positives": 0,
                "false negatives": 0,
                "cardinality": 1716,
                "proportion": 0.08580429021451072
            },
            "empty": {
                "accuracy": 0.9993488605058853,
                "balanced accuracy": 0.9981792717086835,
                "f1 score": 0.9806259314456035,
                "precision": 0.9648093841642229,
                "recall": 0.996969696969697,
                "specificity": 0.99938884644767,
                "negative predictive value": 0.9999490419894007,
                "false discovery rate": 0.035190615835777095,
                "miss rate": 0.00303030303030305,
                "fall out": 0.0006111535523299905,
                "false omission rate": 5.095801059928906e-5,
                "informedness": 0.996358543417367,
                "markedness": 0.9647584261536237,
                "mcc": 0.9804311807730596,
                "true positives": 329,
                "true negatives": 19623,
                "false positives": 12,
                "false negatives": 1,
                "cardinality": 330,
                "proportion": 0.01650082504125206
            },
            "p": {
                "accuracy": 1,
                "balanced accuracy": 1,
                "f1 score": 1,
                "precision": 1,
                "recall": 1,
                "specificity": 1,
                "negative predictive value": 1,
                "false discovery rate": 0,
                "miss rate": 0,
                "fall out": 0,
                "false omission rate": 0,
                "informedness": 1,
                "markedness": 1,
                "mcc": 1,
                "true positives": 1644,
                "true negatives": 18308,
                "false positives": 0,
                "false negatives": 0,
                "cardinality": 1644,
                "proportion": 0.08220411020551027
            },
            "Q": {
                "accuracy": 0.9996492810261035,
                "balanced accuracy": 0.9978787878787878,
                "f1 score": 0.9978742787731553,
                "precision": 1,
                "recall": 0.9957575757575757,
                "specificity": 1,
                "negative predictive value": 0.9996178204848221,
                "false discovery rate": 0,
                "miss rate": 0.00424242424242427,
                "fall out": 0,
                "false omission rate": 0.00038217951517793836,
                "informedness": 0.9957575757575756,
                "markedness": 0.9996178204848221,
                "mcc": 0.9976858311162076,
                "true positives": 1643,
                "true negatives": 18309,
                "false positives": 0,
                "false negatives": 7,
                "cardinality": 1650,
                "proportion": 0.08250412520626031
            },
            "q": {
                "accuracy": 1,
                "balanced accuracy": 1,
                "f1 score": 1,
                "precision": 1,
                "recall": 1,
                "specificity": 1,
                "negative predictive value": 1,
                "false discovery rate": 0,
                "miss rate": 0,
                "fall out": 0,
                "false omission rate": 0,
                "informedness": 1,
                "markedness": 1,
                "mcc": 1,
                "true positives": 1575,
                "true negatives": 18377,
                "false positives": 0,
                "false negatives": 0,
                "cardinality": 1575,
                "proportion": 0.07875393769688484
            },
            "r": {
                "accuracy": 1,
                "balanced accuracy": 1,
                "f1 score": 1,
                "precision": 1,
                "recall": 1,
                "specificity": 1,
                "negative predictive value": 1,
                "false discovery rate": 0,
                "miss rate": 0,
                "fall out": 0,
                "false omission rate": 0,
                "informedness": 1,
                "markedness": 1,
                "mcc": 1,
                "true positives": 1622,
                "true negatives": 18330,
                "false positives": 0,
                "false negatives": 0,
                "cardinality": 1622,
                "proportion": 0.08110405520276014
            }
        }
    },
    "matrix": {
        "B": {
            "B": 1639,
            "P": 0,
            "b": 0,
            "K": 0,
            "k": 0,
            "N": 0,
            "R": 0,
            "n": 0,
            "empty": 0,
            "p": 0,
            "Q": 0,
            "q": 0,
            "r": 0
        },
        "P": {
            "B": 15,
            "P": 1676,
            "b": 0,
            "K": 0,
            "k": 0,
            "N": 0,
            "R": 0,
            "n": 0,
            "empty": 0,
            "p": 0,
            "Q": 7,
            "q": 0,
            "r": 0
        },
        "b": {
            "B": 0,
            "P": 0,
            "b": 1590,
            "K": 0,
            "k": 0,
            "N": 0,
            "R": 0,
            "n": 0,
            "empty": 0,
            "p": 0,
            "Q": 0,
            "q": 0,
            "r": 0
        },
        "K": {
            "B": 0,
            "P": 0,
            "b": 0,
            "K": 1657,
            "k": 0,
            "N": 7,
            "R": 4,
            "n": 0,
            "empty": 0,
            "p": 0,
            "Q": 0,
            "q": 0,
            "r": 0
        },
        "k": {
            "B": 0,
            "P": 0,
            "b": 0,
            "K": 0,
            "k": 1666,
            "N": 0,
            "R": 0,
            "n": 0,
            "empty": 0,
            "p": 0,
            "Q": 0,
            "q": 0,
            "r": 0
        },
        "N": {
            "B": 0,
            "P": 0,
            "b": 0,
            "K": 0,
            "k": 0,
            "N": 1620,
            "R": 0,
            "n": 0,
            "empty": 1,
            "p": 0,
            "Q": 0,
            "q": 0,
            "r": 0
        },
        "R": {
            "B": 0,
            "P": 0,
            "b": 0,
            "K": 0,
            "k": 0,
            "N": 1,
            "R": 1575,
            "n": 0,
            "empty": 0,
            "p": 0,
            "Q": 0,
            "q": 0,
            "r": 0
        },
        "n": {
            "B": 0,
            "P": 0,
            "b": 0,
            "K": 0,
            "k": 0,
            "N": 0,
            "R": 0,
            "n": 1716,
            "empty": 0,
            "p": 0,
            "Q": 0,
            "q": 0,
            "r": 0
        },
        "empty": {
            "B": 0,
            "P": 12,
            "b": 0,
            "K": 0,
            "k": 0,
            "N": 0,
            "R": 0,
            "n": 0,
            "empty": 329,
            "p": 0,
            "Q": 0,
            "q": 0,
            "r": 0
        },
        "p": {
            "B": 0,
            "P": 0,
            "b": 0,
            "K": 0,
            "k": 0,
            "N": 0,
            "R": 0,
            "n": 0,
            "empty": 0,
            "p": 1644,
            "Q": 0,
            "q": 0,
            "r": 0
        },
        "Q": {
            "B": 0,
            "P": 0,
            "b": 0,
            "K": 0,
            "k": 0,
            "N": 0,
            "R": 0,
            "n": 0,
            "empty": 0,
            "p": 0,
            "Q": 1643,
            "q": 0,
            "r": 0
        },
        "q": {
            "B": 0,
            "P": 0,
            "b": 0,
            "K": 0,
            "k": 0,
            "N": 0,
            "R": 0,
            "n": 0,
            "empty": 0,
            "p": 0,
            "Q": 0,
            "q": 1575,
            "r": 0
        },
        "r": {
            "B": 0,
            "P": 0,
            "b": 0,
            "K": 0,
            "k": 0,
            "N": 0,
            "R": 0,
            "n": 0,
            "empty": 0,
            "p": 0,
            "Q": 0,
            "q": 0,
            "r": 1622
        }
    }
}
```

### License

The GNU General Public License.
