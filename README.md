# Katas

This repository contains some katas resolutions.

## Convert latin number to roman number

From a latin number (like 1954), we want to be able to retrieve the corresponding roman number (MCMLIV).

## Find highest prime number composing a number

From a given number, which should find the highest prime number composing it.

Some examples:
- From the number 2, the highest prime number is 2.
- From the number 25, there are 2 primes numbers, 2 and 5, so the highest is 5.
- From the number 18572 there are 4 primes numbers, 5, 7, 2 and 857, so the highest is 857.

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

## Data Munging

### Part One: Weather Data

In weather.dat you’ll find daily weather data for Morristown, NJ for June 2002.
Download this text file, then write a program to output the day number (column one) with the smallest temperature spread (the maximum temperature is the second column, the minimum the third column).

### Part Two: Soccer League Table

The file football.dat contains the results from the English Premier League for 2001/2. The columns labeled ‘F’ and ‘A’ contain the total number of goals scored for and against each team in that season (so Arsenal scored 79 goals against opponents, and had 36 goals scored against them).
Write a program to print the name of the team with the smallest difference in ‘for’ and ‘against’ goals.

### Part Three: DRY Fusion

Take the two programs written previously and factor out as much common code as possible, leaving you with two smaller programs and some kind of shared functionality.

## 99 Bottles of beer

Write a function sing that returns the lyrics for the song [99 Bottles of Beer](https://en.wikipedia.org/wiki/99_Bottles_of_Beer) as a an array.
