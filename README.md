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

## Ransom note

A kidnapper wrote a ransom note but is worried it will be traced back to him. He found a magazine and wants to know if he can cut out whole words from it and use them to create an untraceable replica of his ransom note. The words in his note are case-sensitive and he must use whole words available in the magazine, meaning he cannot use substrings or concatenation to create the words he needs.

Given the words in the magazine and the words in the ransom note, print Yes if he can replicate his ransom note exactly using whole words from the magazine; otherwise, print No.

## Greedy thief

In a dark, deserted night, a thief entered a shop. There are some items in the room, and the items have different weight(Kg) and price($):

The thief is greedy, his desire is to take away all the goods. But unfortunately, his bag can only hold n Kg items. So he has to make a choice, try to take away more valuable items.

Please complete the function greedyThief, to help the thief to make the best choice. Two arguments will be given: items(an array that contains all items) and n(the maximum weight of the package can be accommodated).

The result should be a list of items that the thief can take away and has the maximum total price.

## Magic Three

In this Kata, you have to write a function that will accept an array of numbers, in which you will need to check whether any combination of 3 numbers sum to 0. 
You are allowed to use a number more than once, as long as you use only 3 numbers total (e.g. 0+0+1 ).

If a value of 0 is possible return true.
Otherwise, if there is no possible combination of 3 numbers that sum to 0 return false.

Examples

For example let's take the array [ -10, 4, 5, 7, 3 ]. There is a possible combination that sums to 0 => -10 + 7 + 3 = 0. 
Therefore, passing this array to our function should return true.

Another example: the array [0] has one number but there still is a possible combination that will result in 0 => 0 + 0 + 0. The result is true.

Finally, the array [1,4,2,-9] doesn't have any combination of 3 numbers that sum to 0 and therefore should return false.

## Molecule to atoms

For a given chemical formula represented by a string, count the number of atoms of each element contained in the molecule and return an object (associative array in PHP, Dictionary<string, int> in C#, Map in Java).

For example:

```javascript
var water = 'H2O';
parseMolecule(water); // return {H: 2, O: 1}

var magnesiumHydroxide = 'Mg(OH)2';
parseMolecule(magnesiumHydroxide); // return {Mg: 1, O: 2, H: 2}

var fremySalt = 'K4[ON(SO3)2]2';
parseMolecule(fremySalt); // return {K: 4, O: 14, N: 2, S: 4}
```
As you can see, some formulas have brackets in them. The index outside the brackets tells you that you have to multiply count of each atom inside the bracket on this index. For example, in Fe(NO3)2 you have one iron atom, two nitrogen atoms and six oxygen atoms.

Note that brackets may be round, square or curly and can also be nested. Index after the braces is optional.
