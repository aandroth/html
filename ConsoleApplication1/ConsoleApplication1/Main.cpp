#include <vector>
using std::vector;

#include <iostream>
using std::cout;

int count(int n, int k);
bool evalVec(vector<int> vec);
void recurseVec(vector<int> vec, int index, int length, int limit);

int likedVecs, vecCount;;

int main()
{
	cout << count(3, 4) << "\n";

	return 0;
}

int count(int n, int k)
{
	vector<int> vec;
	likedVecs = 0;
	vecCount = 0;

	for (int ii = 0; ii < n; ++ii)
	{
		vec.push_back(0);
	}

	recurseVec(vec, 0, n, k);
	cout << "\nvecCount: " << vecCount << "\n";
	return likedVecs;
}

void recurseVec(vector<int> vec, int index, int length, int limit)
{

	if (index == length)
	{
		if (evalVec(vec))
		{
			++likedVecs;
		}
		return;
	}
	//cout << "index: " << index << "\n";

	vector<int> v = vec;
	for (int ii = 1; ii <= limit; ++ii)
	{
		v[index] = ii;
		recurseVec(v, index + 1, length, limit);
	}
}

bool evalVec(vector<int> vec)
{
	for (int ii = 0; ii < vec.size(); ++ii)
	{
		cout << vec[ii] << ", ";
	}
	++vecCount;
	cout << "\n\n";

	for (int ii = 0; ii < vec.size() - 1; ++ii)
	{
		if (!(vec[ii] <= vec[ii + 1]) && !(vec[ii] % vec[ii + 1] != 0))
			return false;
	}

	return true;
}