# Chess Piece Image Recognizer

In this repository, a chess piece image recognizer is created using a multilayer neural network trained on the [2D Chessboard and Chess Pieces](https://universe.roboflow.com/chess-project/2d-chessboard-and-chess-pieces) dataset.

For further information, please visit:

- [MNIST Handwritten Digit Recognizer](https://github.com/RubixML/MNIST)

---

Remove all files in the `testing` and the `training` folders.

```
$ php cleanup.php
```

Create 15,000 samples (about 1,200 chess piece images in each `training` subfolder) for further training.

```
$ php prepare-training.php 15000
```

Train the neural network.

```
$ php train.php
```

Create 15,000 samples (about 1,200 chess piece images in each `testing` subfolder) for further testing.

```
$ php prepare-testing.php 15000
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
            "accuracy": 0.9996154333744269,
            "balanced accuracy": 0.9987499414300417,
            "f1 score": 0.9977059773444683,
            "precision": 0.9977326938528065,
            "recall": 0.9977098382418185,
            "specificity": 0.999790044618265,
            "negative predictive value": 0.9997904540670044,
            "false discovery rate": 0.0022673061471934395,
            "miss rate": 0.0022901617581816136,
            "fall out": 0.00020995538173492387,
            "false omission rate": 0.00020954593299564914,
            "mcc": 0.9975052080370537,
            "informedness": 0.9974998828600835,
            "markedness": 0.9975231479198109,
            "true positives": 14717,
            "true negatives": 161887,
            "false positives": 34,
            "false negatives": 34,
            "cardinality": 14751
        },
        "classes": {
            "B": {
                "accuracy": 0.9986428716835177,
                "balanced accuracy": 0.999258929894768,
                "f1 score": 0.9920191540303271,
                "precision": 0.9841646872525732,
                "recall": 1,
                "specificity": 0.9985178597895361,
                "negative predictive value": 1,
                "false discovery rate": 0.015835312747426777,
                "miss rate": 0,
                "fall out": 0.0014821402104638892,
                "false omission rate": 0,
                "informedness": 0.9985178597895361,
                "markedness": 0.9841646872525733,
                "mcc": 0.9913152965610272,
                "true positives": 1243,
                "true negatives": 13474,
                "false positives": 20,
                "false negatives": 0,
                "cardinality": 1243,
                "proportion": 0.0842654735272185
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
                "true positives": 1177,
                "true negatives": 13540,
                "false positives": 0,
                "false negatives": 0,
                "cardinality": 1177,
                "proportion": 0.07979120059656973
            },
            "K": {
                "accuracy": 0.9997282793288499,
                "balanced accuracy": 0.9984251968503937,
                "f1 score": 0.9984227129337541,
                "precision": 1,
                "recall": 0.9968503937007874,
                "specificity": 1,
                "negative predictive value": 0.999702712746191,
                "false discovery rate": 0,
                "miss rate": 0.0031496062992125706,
                "fall out": 0,
                "false omission rate": 0.00029728725380895327,
                "informedness": 0.9968503937007873,
                "markedness": 0.999702712746191,
                "mcc": 0.9982755345017655,
                "true positives": 1266,
                "true negatives": 13451,
                "false positives": 0,
                "false negatives": 4,
                "cardinality": 1270,
                "proportion": 0.08609585790793844
            },
            "Q": {
                "accuracy": 0.9997961956521739,
                "balanced accuracy": 0.9998885752488487,
                "f1 score": 0.998809051210798,
                "precision": 0.9976209357652657,
                "recall": 1,
                "specificity": 0.9997771504976972,
                "negative predictive value": 1,
                "false discovery rate": 0.0023790642347343294,
                "miss rate": 0,
                "fall out": 0.0002228495023027799,
                "false omission rate": 0,
                "informedness": 0.9997771504976973,
                "markedness": 0.9976209357652657,
                "mcc": 0.9986984612165194,
                "true positives": 1258,
                "true negatives": 13459,
                "false positives": 3,
                "false negatives": 0,
                "cardinality": 1258,
                "proportion": 0.08528235373872958
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
                "true positives": 1231,
                "true negatives": 13486,
                "false positives": 0,
                "false negatives": 0,
                "cardinality": 1231,
                "proportion": 0.08345196935800962
            },
            "N": {
                "accuracy": 0.999253123302553,
                "balanced accuracy": 0.9981094577735206,
                "f1 score": 0.9955193482688391,
                "precision": 0.9943043124491456,
                "recall": 0.9967373572593801,
                "specificity": 0.999481558287661,
                "negative predictive value": 0.999703681754204,
                "false discovery rate": 0.005695687550854367,
                "miss rate": 0.0032626427406199365,
                "fall out": 0.0005184417123389462,
                "false omission rate": 0.0002963182457960123,
                "informedness": 0.9962189155470411,
                "markedness": 0.9940079942033497,
                "mcc": 0.9951128408529107,
                "true positives": 1222,
                "true negatives": 13495,
                "false positives": 7,
                "false negatives": 4,
                "cardinality": 1226,
                "proportion": 0.08311300928750594
            },
            "R": {
                "accuracy": 0.9997282793288499,
                "balanced accuracy": 0.9998519834221433,
                "f1 score": 0.9983484723369117,
                "precision": 0.9967023907666942,
                "recall": 1,
                "specificity": 0.9997039668442865,
                "negative predictive value": 1,
                "false discovery rate": 0.0032976092333057982,
                "miss rate": 0,
                "fall out": 0.000296033155713471,
                "false omission rate": 0,
                "informedness": 0.9997039668442866,
                "markedness": 0.9967023907666941,
                "mcc": 0.9982020505952932,
                "true positives": 1209,
                "true negatives": 13508,
                "false positives": 4,
                "false negatives": 0,
                "cardinality": 1209,
                "proportion": 0.08196054504779338
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
                "true positives": 1274,
                "true negatives": 13443,
                "false positives": 0,
                "false negatives": 0,
                "cardinality": 1274,
                "proportion": 0.0863670259643414
            },
            "P": {
                "accuracy": 0.9982364511971783,
                "balanced accuracy": 0.9894651539708266,
                "f1 score": 0.9893529893529893,
                "precision": 1,
                "recall": 0.9789303079416531,
                "specificity": 1,
                "negative predictive value": 0.9980790543036572,
                "false discovery rate": 0,
                "miss rate": 0.021069692058346856,
                "fall out": 0,
                "false omission rate": 0.001920945696342824,
                "informedness": 0.9789303079416531,
                "markedness": 0.9980790543036573,
                "mcc": 0.9884583127171288,
                "true positives": 1208,
                "true negatives": 13509,
                "false positives": 0,
                "false negatives": 26,
                "cardinality": 1234,
                "proportion": 0.08365534540031185
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
                "true positives": 1240,
                "true negatives": 13477,
                "false positives": 0,
                "false negatives": 0,
                "cardinality": 1240,
                "proportion": 0.08406209748491628
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
                "true positives": 1186,
                "true negatives": 13531,
                "false positives": 0,
                "false negatives": 0,
                "cardinality": 1186,
                "proportion": 0.08040132872347637
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
                "true positives": 1203,
                "true negatives": 13514,
                "false positives": 0,
                "false negatives": 0,
                "cardinality": 1203,
                "proportion": 0.08155379296318893
            }
        }
    },
    "matrix": {
        "B": {
            "B": 1243,
            "b": 0,
            "K": 1,
            "Q": 0,
            "k": 0,
            "N": 0,
            "R": 0,
            "n": 0,
            "P": 19,
            "p": 0,
            "q": 0,
            "r": 0
        },
        "b": {
            "B": 0,
            "b": 1177,
            "K": 0,
            "Q": 0,
            "k": 0,
            "N": 0,
            "R": 0,
            "n": 0,
            "P": 0,
            "p": 0,
            "q": 0,
            "r": 0
        },
        "K": {
            "B": 0,
            "b": 0,
            "K": 1266,
            "Q": 0,
            "k": 0,
            "N": 0,
            "R": 0,
            "n": 0,
            "P": 0,
            "p": 0,
            "q": 0,
            "r": 0
        },
        "Q": {
            "B": 0,
            "b": 0,
            "K": 3,
            "Q": 1258,
            "k": 0,
            "N": 0,
            "R": 0,
            "n": 0,
            "P": 0,
            "p": 0,
            "q": 0,
            "r": 0
        },
        "k": {
            "B": 0,
            "b": 0,
            "K": 0,
            "Q": 0,
            "k": 1231,
            "N": 0,
            "R": 0,
            "n": 0,
            "P": 0,
            "p": 0,
            "q": 0,
            "r": 0
        },
        "N": {
            "B": 0,
            "b": 0,
            "K": 0,
            "Q": 0,
            "k": 0,
            "N": 1222,
            "R": 0,
            "n": 0,
            "P": 7,
            "p": 0,
            "q": 0,
            "r": 0
        },
        "R": {
            "B": 0,
            "b": 0,
            "K": 0,
            "Q": 0,
            "k": 0,
            "N": 4,
            "R": 1209,
            "n": 0,
            "P": 0,
            "p": 0,
            "q": 0,
            "r": 0
        },
        "n": {
            "B": 0,
            "b": 0,
            "K": 0,
            "Q": 0,
            "k": 0,
            "N": 0,
            "R": 0,
            "n": 1274,
            "P": 0,
            "p": 0,
            "q": 0,
            "r": 0
        },
        "P": {
            "B": 0,
            "b": 0,
            "K": 0,
            "Q": 0,
            "k": 0,
            "N": 0,
            "R": 0,
            "n": 0,
            "P": 1208,
            "p": 0,
            "q": 0,
            "r": 0
        },
        "p": {
            "B": 0,
            "b": 0,
            "K": 0,
            "Q": 0,
            "k": 0,
            "N": 0,
            "R": 0,
            "n": 0,
            "P": 0,
            "p": 1240,
            "q": 0,
            "r": 0
        },
        "q": {
            "B": 0,
            "b": 0,
            "K": 0,
            "Q": 0,
            "k": 0,
            "N": 0,
            "R": 0,
            "n": 0,
            "P": 0,
            "p": 0,
            "q": 1186,
            "r": 0
        },
        "r": {
            "B": 0,
            "b": 0,
            "K": 0,
            "Q": 0,
            "k": 0,
            "N": 0,
            "R": 0,
            "n": 0,
            "P": 0,
            "p": 0,
            "q": 0,
            "r": 1203
        }
    }
}
```

### License

The GNU General Public License.
