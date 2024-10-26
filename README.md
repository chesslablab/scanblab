# Perception

Chess piece image recognizer.

In this repository, a chess piece image recognizer is created using a multilayer neural network trained on the [2D Chessboard and Chess Pieces](https://universe.roboflow.com/chess-project/2d-chessboard-and-chess-pieces) dataset.

For further information, please visit:

- [MNIST Handwritten Digit Recognizer](https://github.com/RubixML/MNIST)

Perception is the building block that allows to recognize the piece placement in FEN format of a chessboard image as it is implemented in the [Chess\Media\FEN](https://github.com/chesslablab/php-chess/tree/main/src/Media/FEN) namespace of the PHP Chess library.

Example:

- [Chess\Media\FEN\JpgToPiecePlacement](https://github.com/chesslablab/php-chess/blob/main/tests/unit/Media/FEN/JpgToPiecePlacementTest.php)

---

Clone the `chesslablab/perception` repo into your projects folder:

```text
git clone git@github.com:chesslablab/perception.git
```

Then `cd` the `perception` directory and install the Composer dependencies:

```text
composer install
```

Make sure to remove all files in the `testing` and the `training` folders.

```text
php cleanup.php
```

Prepare 50,000 samples for further training.

```text
php prepare.php 50000 training
```

Train the neural network.

```text
php train.php
```

Prepare 20,000 samples for further testing.

```text
php prepare.php 20000 testing
```

Make predictions.

```text
php validate.php
```

Below is an excerpt from an example report.

```text
{
    "breakdown": {
        "overall": {
            "accuracy": 0.9994510579306761,
            "balanced accuracy": 0.9977038971505224,
            "f1 score": 0.9961001544839454,
            "precision": 0.9965510770350279,
            "recall": 0.9957062828647335,
            "specificity": 0.9997015114363115,
            "negative predictive value": 0.9997024767903292,
            "false discovery rate": 0.003448922964972234,
            "miss rate": 0.004293717135266537,
            "fall out": 0.00029848856368840636,
            "false omission rate": 0.0002975232096707342,
            "mcc": 0.9958186303218224,
            "informedness": 0.9954077943010451,
            "markedness": 0.9962535538253571,
            "true positives": 49819,
            "true negatives": 597828,
            "false positives": 178,
            "false negatives": 178,
            "cardinality": 49997
        },
        "classes": {
            "1": {
                "accuracy": 0.9996990006822651,
                "balanced accuracy": 0.9921293527894939,
                "f1 score": 0.9908814589665653,
                "precision": 0.9975520195838433,
                "recall": 0.9842995169082126,
                "specificity": 0.999959188670775,
                "negative predictive value": 0.9997347858906094,
                "false discovery rate": 0.002447980416156681,
                "miss rate": 0.0157004830917874,
                "fall out": 4.081132922495456e-5,
                "false omission rate": 0.0002652141093906213,
                "informedness": 0.9842587055789878,
                "markedness": 0.9972868054744528,
                "mcc": 0.9907513412795808,
                "true positives": 815,
                "true negatives": 49004,
                "false positives": 2,
                "false negatives": 13,
                "cardinality": 828,
                "proportion": 0.016560993659619577
            },
            "B": {
                "accuracy": 0.9984968132440775,
                "balanced accuracy": 0.9989570822259015,
                "f1 score": 0.9908301748379998,
                "precision": 0.9823030303030303,
                "recall": 0.9995066600888012,
                "specificity": 0.9984075043630017,
                "negative predictive value": 0.9999563023006839,
                "false discovery rate": 0.017696969696969655,
                "miss rate": 0.0004933399111988201,
                "fall out": 0.001592495636998259,
                "false omission rate": 4.3697699316114225e-5,
                "informedness": 0.997914164451803,
                "markedness": 0.9822593326037143,
                "mcc": 0.9900558070988832,
                "true positives": 4052,
                "true negatives": 45767,
                "false positives": 73,
                "false negatives": 2,
                "cardinality": 4054,
                "proportion": 0.08108486509190552
            },
            "Q": {
                "accuracy": 0.998016747465844,
                "balanced accuracy": 0.9989202041795733,
                "f1 score": 0.9880014543691674,
                "precision": 0.9762874251497006,
                "recall": 1,
                "specificity": 0.9978404083591467,
                "negative predictive value": 1,
                "false discovery rate": 0.023712574850299428,
                "miss rate": 0,
                "fall out": 0.002159591640853331,
                "false omission rate": 0,
                "informedness": 0.9978404083591466,
                "markedness": 0.9762874251497005,
                "mcc": 0.9870050876197534,
                "true positives": 4076,
                "true negatives": 45743,
                "false positives": 99,
                "false negatives": 0,
                "cardinality": 4076,
                "proportion": 0.08152489149348961
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
                "true positives": 4078,
                "true negatives": 45741,
                "false positives": 0,
                "false negatives": 0,
                "cardinality": 4078,
                "proportion": 0.08156489389363362
            },
            "K": {
                "accuracy": 0.9988771929824561,
                "balanced accuracy": 0.9936700067149988,
                "f1 score": 0.9931906614785991,
                "precision": 0.9990215264187867,
                "recall": 0.9874274661508704,
                "specificity": 0.9999125472791273,
                "negative predictive value": 0.998864306462533,
                "false discovery rate": 0.0009784735812132794,
                "miss rate": 0.012572533849129597,
                "fall out": 8.745272087273825e-5,
                "false omission rate": 0.0011356935374670085,
                "informedness": 0.9873400134299977,
                "markedness": 0.9978858328813196,
                "mcc": 0.9925989178105358,
                "true positives": 4084,
                "true negatives": 45735,
                "false positives": 4,
                "false negatives": 52,
                "cardinality": 4136,
                "proportion": 0.08272496349780988
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
                "true positives": 4154,
                "true negatives": 45665,
                "false positives": 0,
                "false negatives": 0,
                "cardinality": 4154,
                "proportion": 0.08308498509910595
            },
            "N": {
                "accuracy": 0.9993781344032097,
                "balanced accuracy": 0.9961700024709661,
                "f1 score": 0.9961552771921122,
                "precision": 1,
                "recall": 0.9923400049419323,
                "specificity": 1,
                "negative predictive value": 0.9993236462015098,
                "false discovery rate": 0,
                "miss rate": 0.007659995058067692,
                "fall out": 0,
                "false omission rate": 0.0006763537984901813,
                "informedness": 0.9923400049419322,
                "markedness": 0.9993236462015098,
                "mcc": 0.9958257036300057,
                "true positives": 4016,
                "true negatives": 45803,
                "false positives": 0,
                "false negatives": 31,
                "cardinality": 4047,
                "proportion": 0.08094485669140149
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
                "true positives": 4242,
                "true negatives": 45577,
                "false positives": 0,
                "false negatives": 0,
                "cardinality": 4242,
                "proportion": 0.08484509070544233
            },
            "P": {
                "accuracy": 0.9987570417593873,
                "balanced accuracy": 0.9925444925444926,
                "f1 score": 0.9924884904288829,
                "precision": 1,
                "recall": 0.9850889850889851,
                "specificity": 1,
                "negative predictive value": 0.9986458447089658,
                "false discovery rate": 0,
                "miss rate": 0.014911014911014875,
                "fall out": 0,
                "false omission rate": 0.0013541552910342203,
                "informedness": 0.9850889850889852,
                "markedness": 0.9986458447089657,
                "mcc": 0.991844252706889,
                "true positives": 4096,
                "true negatives": 45723,
                "false positives": 0,
                "false negatives": 62,
                "cardinality": 4158,
                "proportion": 0.08316498989939396
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
                "true positives": 4167,
                "true negatives": 45652,
                "false positives": 0,
                "false negatives": 0,
                "cardinality": 4167,
                "proportion": 0.083345000700042
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
                "true positives": 4000,
                "true negatives": 45819,
                "false positives": 0,
                "false negatives": 0,
                "cardinality": 4000,
                "proportion": 0.08000480028801728
            },
            "R": {
                "accuracy": 0.9996388225615507,
                "balanced accuracy": 0.9977595220313666,
                "f1 score": 0.9977544910179641,
                "precision": 1,
                "recall": 0.9955190440627334,
                "specificity": 1,
                "negative predictive value": 0.9996073127099786,
                "false discovery rate": 0,
                "miss rate": 0.004480955937266606,
                "fall out": 0,
                "false omission rate": 0.00039268729002139846,
                "informedness": 0.9955190440627333,
                "markedness": 0.9996073127099785,
                "mcc": 0.9975610840380431,
                "true positives": 3999,
                "true negatives": 45820,
                "false positives": 0,
                "false negatives": 18,
                "cardinality": 4017,
                "proportion": 0.08034482068924136
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
                "true positives": 4040,
                "true negatives": 45779,
                "false positives": 0,
                "false negatives": 0,
                "cardinality": 4040,
                "proportion": 0.08080484829089746
            }
        }
    },
    "matrix": {
        "1": {
            "1": 815,
            "B": 0,
            "Q": 0,
            "b": 0,
            "K": 0,
            "k": 0,
            "N": 0,
            "n": 0,
            "P": 2,
            "p": 0,
            "q": 0,
            "R": 0,
            "r": 0
        },
        "B": {
            "1": 13,
            "B": 4052,
            "Q": 0,
            "b": 0,
            "K": 0,
            "k": 0,
            "N": 0,
            "n": 0,
            "P": 60,
            "p": 0,
            "q": 0,
            "R": 0,
            "r": 0
        },
        "Q": {
            "1": 0,
            "B": 2,
            "Q": 4076,
            "b": 0,
            "K": 52,
            "k": 0,
            "N": 27,
            "n": 0,
            "P": 0,
            "p": 0,
            "q": 0,
            "R": 18,
            "r": 0
        },
        "b": {
            "1": 0,
            "B": 0,
            "Q": 0,
            "b": 4078,
            "K": 0,
            "k": 0,
            "N": 0,
            "n": 0,
            "P": 0,
            "p": 0,
            "q": 0,
            "R": 0,
            "r": 0
        },
        "K": {
            "1": 0,
            "B": 0,
            "Q": 0,
            "b": 0,
            "K": 4084,
            "k": 0,
            "N": 4,
            "n": 0,
            "P": 0,
            "p": 0,
            "q": 0,
            "R": 0,
            "r": 0
        },
        "k": {
            "1": 0,
            "B": 0,
            "Q": 0,
            "b": 0,
            "K": 0,
            "k": 4154,
            "N": 0,
            "n": 0,
            "P": 0,
            "p": 0,
            "q": 0,
            "R": 0,
            "r": 0
        },
        "N": {
            "1": 0,
            "B": 0,
            "Q": 0,
            "b": 0,
            "K": 0,
            "k": 0,
            "N": 4016,
            "n": 0,
            "P": 0,
            "p": 0,
            "q": 0,
            "R": 0,
            "r": 0
        },
        "n": {
            "1": 0,
            "B": 0,
            "Q": 0,
            "b": 0,
            "K": 0,
            "k": 0,
            "N": 0,
            "n": 4242,
            "P": 0,
            "p": 0,
            "q": 0,
            "R": 0,
            "r": 0
        },
        "P": {
            "1": 0,
            "B": 0,
            "Q": 0,
            "b": 0,
            "K": 0,
            "k": 0,
            "N": 0,
            "n": 0,
            "P": 4096,
            "p": 0,
            "q": 0,
            "R": 0,
            "r": 0
        },
        "p": {
            "1": 0,
            "B": 0,
            "Q": 0,
            "b": 0,
            "K": 0,
            "k": 0,
            "N": 0,
            "n": 0,
            "P": 0,
            "p": 4167,
            "q": 0,
            "R": 0,
            "r": 0
        },
        "q": {
            "1": 0,
            "B": 0,
            "Q": 0,
            "b": 0,
            "K": 0,
            "k": 0,
            "N": 0,
            "n": 0,
            "P": 0,
            "p": 0,
            "q": 4000,
            "R": 0,
            "r": 0
        },
        "R": {
            "1": 0,
            "B": 0,
            "Q": 0,
            "b": 0,
            "K": 0,
            "k": 0,
            "N": 0,
            "n": 0,
            "P": 0,
            "p": 0,
            "q": 0,
            "R": 3999,
            "r": 0
        },
        "r": {
            "1": 0,
            "B": 0,
            "Q": 0,
            "b": 0,
            "K": 0,
            "k": 0,
            "N": 0,
            "n": 0,
            "P": 0,
            "p": 0,
            "q": 0,
            "R": 0,
            "r": 4040
        }
    }
}
```

### Contributions

We encourage you to contribute to the Perception repository! Please follow the [Contributing Guidelines](https://github.com/chesslablab/php-chess/blob/main/CONTRIBUTING.md).

<a href="https://github.com/chesslablab/perception/graphs/contributors">
  <img src="https://contrib.rocks/image?repo=chesslablab/perception" />
</a>

Made with [contrib.rocks](https://contrib.rocks)

### License

The MIT license.
