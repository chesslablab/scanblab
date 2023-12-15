# Chess Piece Image Recognizer

In this repository, a chess piece image recognizer is created using a multilayer neural network trained on the [2D Chessboard and Chess Pieces](https://universe.roboflow.com/chess-project/2d-chessboard-and-chess-pieces) dataset.

For further information, please visit:

- [MNIST Handwritten Digit Recognizer](https://github.com/RubixML/MNIST)

---

Remove all files in the `testing` and the `training` folders.

```
php cleanup.php
```

Prepare 20,000 samples for further training.

```
php prepare.php 20000 training
```

Train the neural network.

```
php train.php
```

Prepare 20,000 samples for further testing.

```
php prepare.php 20000 testing
```

Make predictions.

```
php validate.php
```

Below is an excerpt from an example report.

```
{
    "breakdown": {
        "overall": {
            "accuracy": 0.9994216990880235,
            "balanced accuracy": 0.9969842248240661,
            "f1 score": 0.9941602196186778,
            "precision": 0.9940627491890405,
            "recall": 0.9942795094934874,
            "specificity": 0.9996889401546447,
            "negative predictive value": 0.9996881232795347,
            "false discovery rate": 0.005937250810959638,
            "miss rate": 0.005720490506512628,
            "fall out": 0.00031105984535529675,
            "false omission rate": 0.0003118767204653641,
            "mcc": 0.9938551321222888,
            "informedness": 0.9939684496481321,
            "markedness": 0.993750872468575,
            "true positives": 19924,
            "true negatives": 239088,
            "false positives": 75,
            "false negatives": 75,
            "cardinality": 19999
        },
        "classes": {
            "1": {
                "accuracy": 0.9987468043510953,
                "balanced accuracy": 0.9814868703344161,
                "f1 score": 0.962178517397882,
                "precision": 0.9607250755287009,
                "recall": 0.9636363636363636,
                "specificity": 0.9993373770324685,
                "negative predictive value": 0.9993883168518707,
                "false discovery rate": 0.0392749244712991,
                "miss rate": 0.036363636363636376,
                "fall out": 0.000662622967531501,
                "false omission rate": 0.0006116831481293161,
                "informedness": 0.9629737406688321,
                "markedness": 0.9601133923805716,
                "mcc": 0.9615425029227576,
                "true positives": 318,
                "true negatives": 19606,
                "false positives": 13,
                "false negatives": 12,
                "cardinality": 330,
                "proportion": 0.01650082504125206
            },
            "N": {
                "accuracy": 0.997546688028839,
                "balanced accuracy": 0.9941865674490369,
                "f1 score": 0.9850290253589978,
                "precision": 0.9799392097264438,
                "recall": 0.9901719901719902,
                "specificity": 0.9982011447260835,
                "negative predictive value": 0.9991270187690965,
                "false discovery rate": 0.020060790273556228,
                "miss rate": 0.009828009828009798,
                "fall out": 0.0017988552739165442,
                "false omission rate": 0.0008729812309035134,
                "informedness": 0.9883731348980738,
                "markedness": 0.9790662284955403,
                "mcc": 0.9837086751325164,
                "true positives": 1612,
                "true negatives": 18312,
                "false positives": 33,
                "false negatives": 16,
                "cardinality": 1628,
                "proportion": 0.08140407020351018
            },
            "B": {
                "accuracy": 0.9990472847615705,
                "balanced accuracy": 0.9942563482466747,
                "f1 score": 0.9942231681362116,
                "precision": 1,
                "recall": 0.9885126964933495,
                "specificity": 1,
                "negative predictive value": 0.9989622023159275,
                "false discovery rate": 0,
                "miss rate": 0.011487303506650504,
                "fall out": 0,
                "false omission rate": 0.0010377976840725278,
                "informedness": 0.9885126964933495,
                "markedness": 0.9989622023159275,
                "mcc": 0.9937237142718555,
                "true positives": 1635,
                "true negatives": 18289,
                "false positives": 0,
                "false negatives": 19,
                "cardinality": 1654,
                "proportion": 0.08270413520676034
            },
            "Q": {
                "accuracy": 0.9993479460299944,
                "balanced accuracy": 0.9996445562421392,
                "f1 score": 0.9960760639903411,
                "precision": 0.9921828021647625,
                "recall": 1,
                "specificity": 0.9992891124842784,
                "negative predictive value": 1,
                "false discovery rate": 0.007817197835237488,
                "miss rate": 0,
                "fall out": 0.0007108875157215699,
                "false omission rate": 0,
                "informedness": 0.9992891124842784,
                "markedness": 0.9921828021647625,
                "mcc": 0.9957296178166992,
                "true positives": 1650,
                "true negatives": 18274,
                "false positives": 13,
                "false negatives": 0,
                "cardinality": 1650,
                "proportion": 0.08250412520626031
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
                "true negatives": 18334,
                "false positives": 0,
                "false negatives": 0,
                "cardinality": 1590,
                "proportion": 0.07950397519875994
            },
            "K": {
                "accuracy": 0.9995484874329003,
                "balanced accuracy": 0.9972842486421243,
                "f1 score": 0.9972768532526476,
                "precision": 1,
                "recall": 0.9945684972842487,
                "specificity": 1,
                "negative predictive value": 0.9995077932731747,
                "false discovery rate": 0,
                "miss rate": 0.005431502715751324,
                "fall out": 0,
                "false omission rate": 0.0004922067268252617,
                "informedness": 0.9945684972842486,
                "markedness": 0.9995077932731746,
                "mcc": 0.997035086634165,
                "true positives": 1648,
                "true negatives": 18276,
                "false positives": 0,
                "false negatives": 9,
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
                "true negatives": 18258,
                "false positives": 0,
                "false negatives": 0,
                "cardinality": 1666,
                "proportion": 0.08330416520826041
            },
            "R": {
                "accuracy": 0.999197592778335,
                "balanced accuracy": 0.9995642938837754,
                "f1 score": 0.9949590422180214,
                "precision": 0.9899686520376175,
                "recall": 1,
                "specificity": 0.9991285877675508,
                "negative predictive value": 1,
                "false discovery rate": 0.010031347962382475,
                "miss rate": 0,
                "fall out": 0.0008714122324492424,
                "false omission rate": 0,
                "informedness": 0.9991285877675509,
                "markedness": 0.9899686520376174,
                "mcc": 0.9945380743061026,
                "true positives": 1579,
                "true negatives": 18345,
                "false positives": 16,
                "false negatives": 0,
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
                "true negatives": 18208,
                "false positives": 0,
                "false negatives": 0,
                "cardinality": 1716,
                "proportion": 0.08580429021451072
            },
            "P": {
                "accuracy": 0.9990472847615705,
                "balanced accuracy": 0.9943720379146919,
                "f1 score": 0.9943401846887102,
                "precision": 1,
                "recall": 0.9887440758293838,
                "specificity": 1,
                "negative predictive value": 0.9989602714238809,
                "false discovery rate": 0,
                "miss rate": 0.01125592417061616,
                "fall out": 0,
                "false omission rate": 0.0010397285761191144,
                "informedness": 0.9887440758293837,
                "markedness": 0.998960271423881,
                "mcc": 0.993839046505658,
                "true positives": 1669,
                "true negatives": 18255,
                "false positives": 0,
                "false negatives": 19,
                "cardinality": 1688,
                "proportion": 0.08440422021101054
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
                "true negatives": 18280,
                "false positives": 0,
                "false negatives": 0,
                "cardinality": 1644,
                "proportion": 0.08220411020551027
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
                "true negatives": 18349,
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
                "true negatives": 18302,
                "false positives": 0,
                "false negatives": 0,
                "cardinality": 1622,
                "proportion": 0.08110405520276014
            }
        }
    },
    "matrix": {
        "1": {
            "1": 318,
            "N": 0,
            "B": 8,
            "Q": 0,
            "b": 0,
            "K": 0,
            "k": 0,
            "R": 0,
            "n": 0,
            "P": 5,
            "p": 0,
            "q": 0,
            "r": 0
        },
        "N": {
            "1": 12,
            "N": 1612,
            "B": 7,
            "Q": 0,
            "b": 0,
            "K": 0,
            "k": 0,
            "R": 0,
            "n": 0,
            "P": 14,
            "p": 0,
            "q": 0,
            "r": 0
        },
        "B": {
            "1": 0,
            "N": 0,
            "B": 1635,
            "Q": 0,
            "b": 0,
            "K": 0,
            "k": 0,
            "R": 0,
            "n": 0,
            "P": 0,
            "p": 0,
            "q": 0,
            "r": 0
        },
        "Q": {
            "1": 0,
            "N": 0,
            "B": 4,
            "Q": 1650,
            "b": 0,
            "K": 9,
            "k": 0,
            "R": 0,
            "n": 0,
            "P": 0,
            "p": 0,
            "q": 0,
            "r": 0
        },
        "b": {
            "1": 0,
            "N": 0,
            "B": 0,
            "Q": 0,
            "b": 1590,
            "K": 0,
            "k": 0,
            "R": 0,
            "n": 0,
            "P": 0,
            "p": 0,
            "q": 0,
            "r": 0
        },
        "K": {
            "1": 0,
            "N": 0,
            "B": 0,
            "Q": 0,
            "b": 0,
            "K": 1648,
            "k": 0,
            "R": 0,
            "n": 0,
            "P": 0,
            "p": 0,
            "q": 0,
            "r": 0
        },
        "k": {
            "1": 0,
            "N": 0,
            "B": 0,
            "Q": 0,
            "b": 0,
            "K": 0,
            "k": 1666,
            "R": 0,
            "n": 0,
            "P": 0,
            "p": 0,
            "q": 0,
            "r": 0
        },
        "R": {
            "1": 0,
            "N": 16,
            "B": 0,
            "Q": 0,
            "b": 0,
            "K": 0,
            "k": 0,
            "R": 1579,
            "n": 0,
            "P": 0,
            "p": 0,
            "q": 0,
            "r": 0
        },
        "n": {
            "1": 0,
            "N": 0,
            "B": 0,
            "Q": 0,
            "b": 0,
            "K": 0,
            "k": 0,
            "R": 0,
            "n": 1716,
            "P": 0,
            "p": 0,
            "q": 0,
            "r": 0
        },
        "P": {
            "1": 0,
            "N": 0,
            "B": 0,
            "Q": 0,
            "b": 0,
            "K": 0,
            "k": 0,
            "R": 0,
            "n": 0,
            "P": 1669,
            "p": 0,
            "q": 0,
            "r": 0
        },
        "p": {
            "1": 0,
            "N": 0,
            "B": 0,
            "Q": 0,
            "b": 0,
            "K": 0,
            "k": 0,
            "R": 0,
            "n": 0,
            "P": 0,
            "p": 1644,
            "q": 0,
            "r": 0
        },
        "q": {
            "1": 0,
            "N": 0,
            "B": 0,
            "Q": 0,
            "b": 0,
            "K": 0,
            "k": 0,
            "R": 0,
            "n": 0,
            "P": 0,
            "p": 0,
            "q": 1575,
            "r": 0
        },
        "r": {
            "1": 0,
            "N": 0,
            "B": 0,
            "Q": 0,
            "b": 0,
            "K": 0,
            "k": 0,
            "R": 0,
            "n": 0,
            "P": 0,
            "p": 0,
            "q": 0,
            "r": 1622
        }
    }
}
```

### License

This product is licensed under the [GNU General Public License](https://github.com/chesslablab/chess-scan/blob/master/LICENSE).

Happy learning and coding! Thank you, and keep it up!
