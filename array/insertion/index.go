package main

import "fmt"

func main() {
	array := []int{2, 3, 4, 5}
	insertElement := 1
	n := 0
	for range array {
		n++
	}
	array = append(array, 0)
	for i := n - 1; i >= 0; i-- {
		array[i+1] = array[i]
	}
	array[0] = insertElement
	n++
	fmt.Println(array)
}
