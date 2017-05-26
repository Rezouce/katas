# Katas

This repository contains some katas resolutions.

## Convert latin number to roman number

From a latin number (like 1954), we want to be able to retrieve the corresponding roman number (MCMLIV).

You can see my way to solve it by looking from the commit [841dd27](https://github.com/Rezouce/katas/commit/841dd27619f36dbf9d4ba4ee3637855023e40f9f) to [137f04f](https://github.com/Rezouce/katas/commit/137f04f82b0691a054b088469e11e3b6f245968a) (8 commits).

## Find highest prime number composing a number

From a given number, which should find the highest prime number composing it.

Some examples:
- From the number 2, the highest prime number is 2.
- From the number 25, there are 2 primes numbers, 2 and 5, so the highest is 5.
- From the number 18572 there are 4 primes numbers, 5, 7, 2 and 857, so the highest is 857.

You can see my way to solve it by looking from the commit [b6ccf34](https://github.com/Rezouce/katas/commit/b6ccf34673332eef2b9f014764b9df057eb940a0) to [92d2064](https://github.com/Rezouce/katas/commit/92d206419dfa6030a8c549cc3c71b158a9ad78ff) (39 commits).

## Draw a spiral

The task is to create a NxN spiral with a given size.

For example, spiral with size 5 should look like this:
```
00000
....0
000.0
0...0
00000
```

And with the size 10:
```
0000000000
.........0
00000000.0
0......0.0
0.0000.0.0
0.0..0.0.0
0.0....0.0
0.000000.0
0........0
0000000000
```

You can see my way to solve it by looking from the commit [6e972ae](https://github.com/Rezouce/katas/commit/6e972ae8ce43cac04ced9a5602a9d6797b2752fd) to [23592b2](https://github.com/Rezouce/katas/commit/23592b2d1455e88353b8b7534fece100fa74e85a) (5 commits).

## Cat and Mouse

Given a string map filled with '.', featuring a cat 'C' and a mouse 'm'.
We need to find out if the cat can catch the mouse from it's current position in a given number of moves.
The cat can move to up, down, left and right.

```
..C......
.........
....m....
```

```
.C.......
.........
......m..
```

You can see my way to solve it by looking at the commits [0cdf648](https://github.com/Rezouce/katas/commit/0cdf648f2c2fe22051c04cb67694adf260f3feba) and [5ff91cc](https://github.com/Rezouce/katas/commit/5ff91cc9594d118bc1032b8a8a3fd4ccf4ef14d9).

## Sort the animals

Consider the following class:

```
class Animal
{
	public string Name { get; set; }
	public int NumberOfLegs { get; set; }
}
```

Write a method that accepts a list of objects of type Animal, and returns a new list. The new list should be a copy of the original list, sorted first by the animal's number of legs, and then by its name.

If null is passed, the method should return null. If an empty list is passed, it should return an empty list back.
