import sys

def circular_matrix():
	
	n = int(sys.argv[1])
	result = [[0]*n for i in range(n)]
	k=1
	c1=0
	c2=n-1
	r1=0
	r2=n-1

	while k<=n*n:
		for i in xrange(c1,c2+1):

			result[r1][i] = k
			k = k+1
		for j in xrange(r1+1,r2+1):	

			result[j][c2] = k
			k = k+1

		for i in xrange(c2-1,c1-1,-1):
			
			result[r2][i] = k
			k = k+1

		for j in xrange(r2-1,r1,-1):
			
			result[j][c1] = k
			k = k+1

		c1=c1+1
		c2=c2-1
		r1=r1+1
		r2=r2-1
	
	for item in result:
		print item	
	
circular_matrix()