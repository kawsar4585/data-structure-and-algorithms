package main

import "fmt"

func main() {
	array := []int{5, 3, 6, 2, 1}
	sum := 0
	for i := 0; i < len(array); i++ {
		fmt.Println(array[i])
		sum += array[i]
	}
	fmt.Println("sum : ", sum)
}
